<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Docente Entity
 *
 * @property int $id
 * @property string $nome
 * @property int $titulacao
 * @property string $email
 * @property string $lattes
 * @property string $photo
 * @property string $photo_dir
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Discente[] $discentes
 */
class Docente extends Entity
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
        'titulacao' => true,
        'email' => true,
        'lattes' => true,
        'photo' => true,
        'photo_dir' => true,
        'created' => true,
        'modified' => true,
        'discentes' => true
    ];
}
