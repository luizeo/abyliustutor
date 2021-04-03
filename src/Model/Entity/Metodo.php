<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Metodo Entity
 *
 * @property int $cod_metodo
 * @property string $nome
 * @property string $descricao
 * @property string $passos
 * @property string $referencias
 * @property string $video
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class Metodo extends Entity
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
        'descricao' => true,
        'passos' => true,
        'referencias' => true,
        'video' => true,
        'created' => true,
        'modified' => true
    ];
}
