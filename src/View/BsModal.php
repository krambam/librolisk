<?php

namespace Medialisk\Librolisk\View;

class BsModal
{
    function __construct($jsTargetId = 'my-modal', $modalViewTitle = '', $buttonTitle = 'Modal', $options = array())
    {
        $this->title = $modalViewTitle;
        $this->id = 'bs-modal-' . $jsTargetId;
        if (!$options) {
            $config = array(
                'fade' => true,
                'lg' => true
            );
        } else {
            $config = $options;
        }
        $this->options = array(
            'fade' => ($config['fade'] ? 'fade' : ''),
            'lg' => ($config['lg'] ? 'modal-lg' : '')
        );
        $this->buttonTitle = $buttonTitle;
    }

    function getHtmlAttributesToOpenModal()
    {
        $html = 'data-toggle="modal" data-target="#' . $this->id . '"';
        return $html;
    }

    function getHTMLButton()
    {
        $html = <<< HTML
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#{$this->id}">
    {$this->buttonTitle}
</button>

HTML;
        return $html;
    }

    function getHTMLOpening()
    {
        $html = <<< HTML

<div class="modal {$this->options['fade']}" id="{$this->id}" tabindex="-1" role="dialog" aria-labelledby="{$this->id}" aria-hidden="true">
        <div class="modal-dialog {$this->options['lg']}">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span><span class="sr-only">Close</span></button>
                    <h3 class="modal-title">{$this->title}</h3>
                </div>
                <div class="modal-body">
HTML;

        return $html;
    }

    function getHTMLClosing()
    {
        $html = <<<HTML
            </div>
        </div>
    </div>
</div>
HTML;

        return $html;
    }
}