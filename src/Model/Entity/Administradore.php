<?php
namespace App\Model\Entity;

use Cake\Auth\DefaultPasswordHasher;
use Cake\ORM\Entity;

/**
 * Administradore Entity
 *
 * @property int $cod_admin
 * @property string $nome
 * @property string $email
 * @property string $senha
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class Administradore extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'nome' => true,
        'email' => true,
        'senha' => true,
        'created' => true,
        'modified' => true
    ];

    protected function _setPassword($senha)
    {
        if (strlen($senha) > 0) {
            return (new DefaultPasswordHasher)->hash($senha);
        }
    }

}
