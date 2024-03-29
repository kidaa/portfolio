<?php
/**
 * @package   Gantry5
 * @author    RocketTheme http://www.rockettheme.com
 * @copyright Copyright (C) 2007 - 2015 RocketTheme, LLC
 * @license   Dual License: MIT or GNU/GPLv2 and later
 *
 * http://opensource.org/licenses/MIT
 * http://www.gnu.org/licenses/gpl-2.0.html
 *
 * Gantry Framework code that extends GPL code is considered GNU/GPLv2 and later
 */

namespace Gantry\Component\Assignments;

use Gantry\Component\Config\CompiledConfig;
use Gantry\Component\Config\ConfigFileFinder;
use Gantry\Component\Gantry\GantryTrait;
use Gantry\Framework\Gantry;
use RocketTheme\Toolbox\File\YamlFile;
use RocketTheme\Toolbox\ResourceLocator\UniformResourceLocator;

abstract class AbstractAssignments
{
    /**
     * @var string
     */
    protected $configuration;

    /**
     * @var string
     */
    protected $className = '\Gantry\%s\Assignments\Assignments%s';

    /**
     * @var string
     */
    protected $platform;

    /**
     * @var AssignmentFilter
     */
    protected $filter;

    /**
     * @var array
     */
    protected $candidates;

    /**
     * @var array
     */
    protected $page;

    /**
     * @param string $configuration
     */
    public function __construct($configuration = null)
    {
        $this->configuration = $configuration;
    }

    /**
     * Get list of assignment items.
     */
    public function get()
    {
        return $this->getTypes();
    }

    /**
     * Set (save) assignments.
     *
     * @param array $data
     */
    public function set(array $data)
    {
        $this->save($data);
    }

    /**
     * Select assigned outline.
     *
     * @param string $default
     * @return string
     */
    public function select($default = 'default')
    {
        $scores = $this->scores();

        return key($scores) ?: $default;
    }

    /**
     * List matching outlines sorted by score.
     *
     * @return array
     */
    public function scores()
    {
        $this->init();
        return $this->filter->scores($this->candidates, $this->page);
    }

    /**
     * List matching outlines with matched assignments.
     *
     * @return array
     */
    public function matches()
    {
        $this->init();
        return $this->filter->matches($this->candidates, $this->page);
    }

    /**
     * Load all assignments.
     *
     * @return array
     */
    public function loadAssignments()
    {
        $gantry = Gantry::instance();

        /** @var UniformResourceLocator $locator */
        $locator = $gantry['locator'];

        // Find all the assignment files.
        $paths = $locator->findResources("gantry-config://");
        $files = (new ConfigFileFinder)->locateFileInFolder('assignments', $paths);

        $cache = $locator->findResource('gantry-cache://theme/compiled/config', true, true);

        $config = new CompiledConfig($cache, [$files], GANTRY5_ROOT);

        return $config->load()->toArray();
    }

    /**
     * Get all assignments for the current page.
     *
     * @return array
     */
    public function getPage()
    {
        $list = [];

        foreach($this->types() as $type) {
            $class = sprintf($this->className, $this->platform, ucfirst($type));

            if (!class_exists($class)) {
                throw new \RuntimeException("Assignment type {$type} is missing");
            }

            /** @var AssignmentsInterface $instance */
            $instance = new $class;
            $list[$type] = $instance->getRules();
            unset($instance);
        }

        return $list;
    }

    /**
     * Save assignments for the configuration.
     *
     * @param array $data
     */
    public function save(array $data)
    {
        $types = [];
        foreach ($this->types() as $type) {
            $types[$type] = [];
        }

        $data = array_replace($types, $data['assignments']);
        foreach ($data as $tname => &$type) {
            foreach ($type as $gname => &$group) {
                foreach ($group as $key => $value) {
                    if (!$value) {
                        unset($group[$key]);
                    } else {
                        $group[$key] = (bool) $value;
                    }
                }
                if (empty($group)) {
                    unset($type[$gname]);
                }
            }
        }

        $gantry = Gantry::instance();

        /** @var UniformResourceLocator $locator */
        $locator = $gantry['locator'];

        // Save layout into custom directory for the current theme.
        $save_dir = $locator->findResource("gantry-config://{$this->configuration}", true, true);
        $filename = "{$save_dir}/assignments.yaml";

        $file = YamlFile::instance($filename);
        $file->save($data);
        $file->free();
    }

    /**
     * Get list of all assignment types for assignments form.
     *
     * @return array
     */
    public function getTypes()
    {
        $list = [];

        foreach ($this->types() as $type) {
            $class = sprintf($this->className, $this->platform, ucfirst($type));

            if (!class_exists($class)) {
                throw new \RuntimeException("Assignment type '{$type}' is missing");
            }

            /** @var AssignmentsInterface $instance */
            $instance = new $class;
            $list[$type] = $instance->listRules();
            unset($instance);
        }

        return $list;
    }

    /**
     * Get selected assignment option.
     *
     * @return string
     */
    public function getAssignment()
    {
        return 'default';
    }

    /**
     * Set extra options for assignments.
     *
     * @param $value
     */
    public function setAssignment($value)
    {
    }

    /**
     * Get extra options for assignments.
     *
     * @return array
     */
    public function assignmentOptions()
    {
        return [];
    }

    protected function init()
    {
        if (!$this->filter) {
            $this->filter = new AssignmentFilter;
            $this->candidates = $this->loadAssignments();
            $this->page = $this->getPage();
        }
    }

    /**
     * Return list of assignment types.
     *
     * @return array
     */
    abstract public function types();
}
