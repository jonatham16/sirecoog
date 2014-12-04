<?php

namespace Sirecoog\UsuarioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
//use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\AdvancedUserInterface;
/**
 * Usuario
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Sirecoog\UsuarioBundle\Entity\UsuarioRepository")
 */
class Usuario implements AdvancedUserInterface, \Serializable
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=100)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="login", type="string", length=60)
     */
    private $login;

    /**
     * @var string
     *
     * @ORM\Column(name="clave", type="string", length=30)
     */
    private $clave;

    /**
     * @var string
     *
     * @ORM\Column(name="cedula", type="string", length=20)
     */
    private $cedula;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Usuario
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set login
     *
     * @param string $login
     * @return Usuario
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get login
     *
     * @return string 
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set clave
     *
     * @param string $clave
     * @return Usuario
     */
    public function setClave($clave)
    {
        $this->clave = $clave;

        return $this;
    }

    /**
     * Get clave
     *
     * @return string 
     */
    public function getClave()
    {
        return $this->clave;
    }

    /**
     * Set cedula
     *
     * @param string $cedula
     * @return Usuario
     */
    public function setCedula($cedula)
    {
        $this->cedula = $cedula;

        return $this;
    }

    /**
     * Get cedula
     *
     * @return string 
     */
    public function getCedula()
    {
        return $this->cedula;
    }
 /**
     * @inheritDoc
     */
    public function eraseCredentials() {
        
    }
 /**
     * @inheritDoc
     */
    public function getPassword() {
        return $this->getClave();
    }
 /**
     * @inheritDoc
     */
    public function getRoles() {
        return array('ROLE_ADMIN');
    }
 /**
     * @inheritDoc
     */
    public function getSalt() {
        
    }
 /**
     * @inheritDoc
     */
    public function getUsername() {
        return $this->getLogin();
    }
   /**
     * @see \Serializable::serialize()
     */
    public function serialize() {
        
    }
 /**
     * @see \Serializable::unserialize()
     */
    public function unserialize($serialized) {
        return true;
    }

    public function isAccountNonExpired() {
        return true;
    }

    public function isAccountNonLocked() {
        return true;      
    }

    public function isCredentialsNonExpired() {
        return true;       
    }

    public function isEnabled() {
        return true;        
    }

}
