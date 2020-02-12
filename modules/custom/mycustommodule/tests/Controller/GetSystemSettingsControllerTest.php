<?php

namespace Drupal\mycustommodule\Tests;

use Drupal\simpletest\WebTestBase;

/**
 * Provides automated tests for the mycustommodule module.
 */
class GetSystemSettingsControllerTest extends WebTestBase {


  /**
   * {@inheritdoc}
   */
  public static function getInfo() {
    return [
      'name' => "mycustommodule GetSystemSettingsController's controller functionality",
      'description' => 'Test Unit for module mycustommodule and controller GetSystemSettingsController.',
      'group' => 'Other',
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function setUp() {
    parent::setUp();
  }

  /**
   * Tests mycustommodule functionality.
   */
  public function testGetSystemSettingsController() {
    // Check that the basic functions of module mycustommodule.
    $this->assertEquals(TRUE, TRUE, 'Test Unit Generated via Drupal Console.');
  }

}
