<?php

function nav($items, $active, $class = null)
{
    $links = [];
    $active = str_slug($active);

    $itemClass = $class ? $class . '__item ' : '';
    $linkClass = $class ? $class . '__link ' : '';

    if (is_string($items)) {
        $items = config("firo::nav.$items");
    }

    foreach ($items as $item) {
        $html = '<li class="' . $itemClass . 'o-nav__item';

        $html .= in_array($active, [str_slug($item['title']), $item['route']]) ?
            ' is-active">' : '">';
        $html .= '<a class="' . $linkClass . '" href="' . route($item['route']) . '">' . $item['title'] . '</a>';
        $html .= '</li>';

        $links[] = $html;
    }

    return implode('', $links);
}

function attributes($attributes)
{
    $html = [];

    foreach ((array) $attributes as $key => $value) {
        if (is_numeric($key)) $key = $value;
        if (!is_null($value)) $element = $key . '="' . e($value) . '"';
        if (!is_null($element)) $html[] = $element;
    }

    return count($html) > 0 ? ' ' . implode(' ', $html) : '';
}