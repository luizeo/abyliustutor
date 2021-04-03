<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Discente Entity
 *
 * @property int $id
 * @property string $nome
 * @property int $curso
 * @property string $uf_origin
 * @property string $littlevitae
 * @property \Cake\I18n\FrozenDate $ingresso
 * @property string $email
 * @property string $lattes
 * @property int $docente_id
 * @property string $docentes_co_cod
 * @property string $photo
 * @property string $photo_dir
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Docente $docente
 */
class Discente extends Entity
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
        'curso' => true,
        'uf_origin' => true,
        'littlevitae' => true,
        'ingresso' => true,
        'email' => true,
        'lattes' => true,
        'docente_id' => true,
        'docentes_co_cod' => true,
        'photo' => true,
        'photo_dir' => true,
        'created' => true,
        'modified' => true,
        'docente' => true
    ];
}
