<?php
 /**
 * @category  RCM
 * @author    James Jervis <jjervis@relivinc.com>
 * @copyright 2012 Reliv International
 * @license   License.txt New BSD License
 * @version   GIT: reliv
 * @link      http://ci.reliv.com/confluence
 */

namespace RcmUser\User\Entity;


class UserBasicAuth  extends AbstractProperty {

    protected $username;
    protected $password;

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = (string) $password;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->username = (string)$username;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }
} 