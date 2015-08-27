<?php
/**
 * @file
 * Contains Drupal\views_slideshow\SlideshowSkinPluginManager.
 */

namespace Drupal\views_slideshow;

use Drupal\Core\Cache\CacheBackendInterface;
use Drupal\Core\Extension\ModuleHandlerInterface;
use Drupal\Core\Plugin\DefaultPluginManager;

/**
 * Class SlideshowSkinPluginManager
 * @package Drupal\views_slidehsow
 */
class SlideshowSkinPluginManager extends DefaultPluginManager {

  /**
   * Constructs a new SlideshowSkinPluginManager.
   *
   * @param \Traversable $namespaces
   *   An object that implements \Traversable which contains the root paths
   *   keyed by the corresponding namespace to look for plugin implementations.
   * @param \Drupal\Core\Cache\CacheBackendInterface $cache_backend
   *   Cache backend instance to use.
   * @param \Drupal\Core\Extension\ModuleHandlerInterface $module_handler
   *   The module handler.
   */
  public function __construct(\Traversable $namespaces, CacheBackendInterface $cache_backend, ModuleHandlerInterface $module_handler) {
    parent::__construct('Plugin/SlideshowSkin', $namespaces, $module_handler, 'Drupal\views_slideshow\SlideshowSkinInterface', 'Drupal\views_slideshow\Annotation\SlideshowSkin');

    $this->alterInfo('views_slideshow_skin_info');
    $this->setCacheBackend($cache_backend, 'views_slideshow_skin');
  }
}