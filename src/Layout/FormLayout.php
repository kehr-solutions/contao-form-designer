<?php

/**
 * @package    contao-form-designer
 * @author     David Molineus <david.molineus@netzmacht.de>
 * @copyright  2017 netzmacht David Molineus. All rights reserved.
 * @filesource
 *
 */

namespace Netzmacht\Contao\FormDesigner\Layout;

use Contao\Widget;
use Netzmacht\Html\Attributes;

/**
 * Interface FormLayout.
 *
 * @package Netzmacht\Contao\FormDesigner\Resources
 */
interface FormLayout
{
    /**
     * Render a widget.
     *
     * @param Widget $widget Form widget.
     *
     * @return string
     */
    public function render(Widget $widget);

    /**
     * Get the layout template.
     *
     * @param Widget $widget Form widget.
     *
     * @return string
     */
    public function renderControl(Widget $widget);

    /**
     * Get the layout template.
     *
     * @param Widget $widget Form widget.
     *
     * @return string
     */
    public function renderLabel(Widget $widget);

    /**
     * Get the layout template.
     *
     * @param Widget $widget Form widget.
     *
     * @return string
     */
    public function renderErrors(Widget $widget);

    /**
     * Render the help text.
     *
     * @param Widget $widget Form widget.
     *
     * @return string
     */
    public function renderHelpText(Widget $widget);

    /**
     * Get container attributes.
     *
     * @param Widget $widget Form widget.
     *
     * @return Attributes
     */
    public function getContainerAttributes(Widget $widget);

    /**
     * Get label attributes.
     *
     * @param Widget $widget Form widget.
     *
     * @return Attributes
     */
    public function getLabelAttributes(Widget $widget);
}
