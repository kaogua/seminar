<?php
/**
 *  {$view_path}
 *
 *  @author     {$author}
 *  @package    Seminar
 *  @version    $Id: skel.view_test.php 503 2008-04-25 04:06:08Z mumumu-org $
 */

/**
 *  {$forward_name}ビューの実装
 *
 *  @author     {$author}
 *  @access     public
 *  @package    Seminar
 */
class {$view_class}_TestCase extends Ethna_UnitTestCase
{
    /**
     *  @access private
     *  @var    string  ビュー名
     */
    var $forward_name = '{$forward_name}';

    /**
     *    テストの初期化
     *
     *    @access public
     */
    function setUp()
    {
        $this->createPlainActionForm(); // アクションフォームの作成
        $this->createViewClass();       // ビューの作成
    }

    /**
     *    テストの後始末
     *
     *    @access public
     */
    function tearDown()
    {
    }

    /**
     *  {$forward_name}遷移前処理のサンプルテストケース
     *
     *  @access public
     */
    function test_viewSample()
    {
        /*
        // フォームの設定
        $this->af->set('id', 1);

        // {$forward_name}遷移前処理
        $this->vc->preforward();
        $this->assertNull($this->af->get('data'));
        */

        /**
         *  TODO: テストケースを記述して下さい。
         *  @see http://simpletest.org/en/first_test_tutorial.html
         *  @see http://simpletest.org/en/unit_test_documentation.html
         */
        $this->fail('No Test! write Test!');
    }
}
?>
