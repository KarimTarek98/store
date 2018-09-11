<?php
namespace PHPMVC\LIB\Template;

class Template
{
    use TemplateHelper;
    private $_templateParts;
    private $_actionView;
    private $_data;

    public function __construct(array $parts)
    {
        $this->_templateParts = $parts;
    }

    public function setActionViewFile($actionViewPath)
    {
        $this->_actionView = $actionViewPath;
    }

    public function setAppData($data)
    {
        $this->_data = $data;
    }

    private function renderHeaderStart()
    {
        extract($this->_data);
        require_once TEMPLATE_PATH . 'templateheaderstart.php';
    }

    private function renderHeaderEnd()
    {
        extract($this->_data);
        require_once TEMPLATE_PATH . 'templateheaderend.php';
    }

    private function renderFooter()
    {
        extract($this->_data);
        require_once TEMPLATE_PATH . 'templatefooter.php';
    }

    private function renderTemplateBlocks()
    {
        if (!array_key_exists('template' , $this->_templateParts))
        {
            trigger_error('Sorry you have define template key' , E_USER_WARNING);
        }
        else
        {
            extract($this->_data);
            $parts = $this->_templateParts['template'];
            if (!empty($parts))
            {
                foreach ($parts as  $partKey => $file)
                {
                    if ($partKey == ':view')
                    {
                        require_once $this->_actionView;
                    }
                    else
                    {
                        require_once $file;
                    }
                }
            }
        }
    }

    private function renderHeaderResources()
    {
        $output = '';
        if (!array_key_exists('header_resources' , $this->_templateParts))
        {
            trigger_error('Sorry you have define header resources' , E_USER_WARNING);
        }
        else
        {
            $resources = $this->_templateParts['header_resources'];
            //  Produce Css
            $css = $resources['css'];
            if (!empty($css))
            {
                foreach ($css as  $cssKey => $path)
                {
                    $output .= '<link rel="stylesheet" href="' . $path . '">';
                }
            }

            //  Produce Js
            $js = $resources['js'];
            if (!empty($js))
            {
                foreach ($js as  $jsKey => $path)
                {
                    $output .= '<script src="' . $path . '"></script>';
                }
            }
        }
        echo $output;
    }

    private function renderFooterResources()
    {
        $output = '';
        if (!array_key_exists('footer_resources' , $this->_templateParts))
        {
            trigger_error('Sorry you have define footer resources' , E_USER_WARNING);
        }
        else
        {
            $resources = $this->_templateParts['footer_resources'];

            //  Produce Js
            if (!empty($resources))
            {
                foreach ($resources as  $resourceKey => $path)
                {
                    $output .= '<script src="' . $path . '"></script>';
                }
            }
        }
        echo $output;
    }

    public function renderApp()
    {
        $this->renderHeaderStart();
        $this->renderHeaderResources();
        $this->renderHeaderEnd();
        $this->renderTemplateBlocks();
        $this->renderFooterResources();
        $this->renderFooter();
    }
}