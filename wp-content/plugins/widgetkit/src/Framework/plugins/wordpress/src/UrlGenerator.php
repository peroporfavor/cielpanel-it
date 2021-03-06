<?php

namespace YOOtheme\Widgetkit\Framework\Wordpress;

use YOOtheme\Widgetkit\Framework\Routing\UrlGenerator as BaseGenerator;

class UrlGenerator extends BaseGenerator
{
    /**
     * {@inheritdoc}
     */
    public function route($pattern = '', $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if ($pattern !== '') {

            $search = array();

            foreach ($parameters as $key => $value) {
                $search[] = '#:' . preg_quote($key, '#') . '(?!\w)#';
            }

            $pattern = preg_replace($search, $parameters, $pattern);
            $pattern = preg_replace('#\(/?:.+\)|\(|\)|\\\\#', '', $pattern);

            $parameters = array_merge(array('p' => $pattern), $parameters);
        }

        return $this->to($this->request->getBaseRoute(), $parameters, $referenceType);
    }
}
