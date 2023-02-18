<?php

namespace api\models\user;

use api\models\user\User;
use Yii;
use yii\base\Model;
use common\components\JwtToken;

/**
 * Login form
 */
class ApiLogin extends Model
{
    public $username;
    public $password;
    public $device;
    public $ip_address;
    public $rememberMe = true;

    private $_user;


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            // username and password are both required
            [['username', 'password', 'device', 'ip_address'], 'required'],
            // rememberMe must be a boolean value
            ['rememberMe', 'boolean'],
            // password is validated by validatePassword()
            ['password', 'validatePassword'],
        ];
    }

    /**
     * Validates the password.
     * This method serves as the inline validation for password.
     *
     * @param string $attribute the attribute currently being validated
     * @param array $params the additional name-value pairs given in the rule
     */
    public function validatePassword($attribute, $params)
    {
        if (!$this->hasErrors()) {
            $user = $this->getUser();
            if (!$user || !$user->validatePassword($this->password)) {
                $this->addError($attribute, 'Incorrect username or password.');
            }
        }
    }

    /**
     * Logs in a user using the provided username and password.
     *
     * @return bool whether the user is logged in successfully
     */
    public function login()
    {
        $user = $this->getUser();
        if ($this->validate()) {
            $jwt = new JwtToken();
            $jwtToken = $jwt->create(Yii::$app->security->generateRandomString() . time() . time());
            $session = new UserSession();
            $session->user_id = $user->id;
            $session->token = $jwtToken;
            $session->device = $this->device;
            $session->ip_address = $this->ip_address;
            $session->created = time();
            return $session->save() ? $session->token : null;
        }

        return false;
    }

    /**
     * Finds user by [[username]]
     *
     * @return User|null
     */
    protected function getUser()
    {
        if ($this->_user === null) {
            $this->_user = User::findByUsername($this->username);
        }

        return $this->_user;
    }
}
