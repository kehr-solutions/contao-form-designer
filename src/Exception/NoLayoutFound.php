<?php

/**
 * Contao Form Designer.
 *
 * @filesource
 */

declare(strict_types=1);

namespace Netzmacht\Contao\FormDesigner\Exception;

use Contao\Widget;
use Netzmacht\Contao\FormDesigner\Util\WidgetUtil;
use Throwable;

use function sprintf;

/**
 * Class NoLayoutFound exception.
 */
class NoLayoutFound extends Exception
{
    /**
     * Generate the no layout widget.
     *
     * @param Widget         $widget   Form widget.
     * @param int            $code     Error code.
     * @param Throwable|null $previous Previous exception.
     *
     * @return NoLayoutFound
     */
    public static function forWidget(Widget $widget, int $code = 0, ?Throwable $previous = null): self
    {
        $message = sprintf('No layout found for form widget type "%s"', WidgetUtil::getType($widget));

        return new static($message, $code, $previous);
    }
}
