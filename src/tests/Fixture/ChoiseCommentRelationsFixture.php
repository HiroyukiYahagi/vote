<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ChoiseCommentRelationsFixture
 *
 */
class ChoiseCommentRelationsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'deleted' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'choise_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'comment_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'fk_choise_comment_relations_choise_id_idx' => ['type' => 'index', 'columns' => ['choise_id'], 'length' => []],
            'fk_choise_comment_relations_comment_id_idx' => ['type' => 'index', 'columns' => ['comment_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_choise_comment_relations_choise_id' => ['type' => 'foreign', 'columns' => ['choise_id'], 'references' => ['choises', 'id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
            'fk_choise_comment_relations_comment_id' => ['type' => 'foreign', 'columns' => ['comment_id'], 'references' => ['comments', 'id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => 1,
            'deleted' => '2016-06-28 04:55:00',
            'choise_id' => 1,
            'comment_id' => 1,
            'created' => '2016-06-28 04:55:00',
            'modified' => '2016-06-28 04:55:00'
        ],
    ];
}
