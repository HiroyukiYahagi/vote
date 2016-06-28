<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ChoiseCommentRelationsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ChoiseCommentRelationsTable Test Case
 */
class ChoiseCommentRelationsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ChoiseCommentRelationsTable
     */
    public $ChoiseCommentRelations;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.choise_comment_relations',
        'app.choises',
        'app.comments'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ChoiseCommentRelations') ? [] : ['className' => 'App\Model\Table\ChoiseCommentRelationsTable'];
        $this->ChoiseCommentRelations = TableRegistry::get('ChoiseCommentRelations', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ChoiseCommentRelations);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
