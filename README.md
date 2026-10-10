[![Contao 4 compatible](https://img.shields.io/badge/Contao%205.3%20%7C%206-compatible-orange.svg?style=flat-square&logo=data%3Aimage%2Fsvg%2Bxml%3Bbase64%2CPD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz48IURPQ1RZUEUgc3ZnIFBVQkxJQyAiLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4iICJodHRwOi8vd3d3LnczLm9yZy9HcmFwaGljcy9TVkcvMS4xL0RURC9zdmcxMS5kdGQiPjxzdmcgdmVyc2lvbj0iMS4xIiBpZD0iRWJlbmVfMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgeD0iMHB4IiB5PSIwcHgiIHdpZHRoPSIxNHB4IiBoZWlnaHQ9IjEyLjIzcHgiIHZpZXdCb3g9IjI0LjExNiAyMS4wNDMgMTQgMTIuMjMiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMjQuMTE2IDIxLjA0MyAxNCAxMi4yMyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI%2BPHBhdGggZmlsbD0iI0ZGRkZGRiIgZD0iTTI1LjA0MiwyMS4wNDNjLTAuNTExLDAtMC45MjUsMC40MTQtMC45MjYsMC45MjR2MTAuMzgxYzAuMDAxLDAuNTExLDAuNDE2LDAuOTI1LDAuOTI2LDAuOTI1SDM3LjE5YzAuNTA5LDAsMC45MjMtMC40MTEsMC45MjYtMC45MjFWMjEuOTY4YzAtMC41MTEtMC40MTUtMC45MjUtMC45MjYtMC45MjRIMjUuMDQyeiIvPjxwYXRoIGZpbGw9IiNGNDdDMDAiIGQ9Ik0yNS4zNjEsMjguNDZjMC4zOTIsMS44MjMsMC43MTgsMy41NiwxLjg2LDQuODFoLTIuMTc5Yy0wLjUwOSwwLTAuOTIzLTAuNDExLTAuOTI2LTAuOTIxVjIxLjk2OGMwLjAwMS0wLjUxMSwwLjQxNi0wLjkyNCwwLjkyNi0wLjkyNGgxLjU3NGMtMC4zODQsMC4zNS0wLjcyMSwwLjc0OC0xLjAwMiwxLjE4NEMyNC4zNjksMjQuMTM2LDI0Ljg4MSwyNi4yMTcsMjUuMzYxLDI4LjQ2eiBNMzcuMTksMjEuMDQzaC0yLjQ3YzAuNTg0LDAuNTg1LDEuMDc4LDEuMzQyLDEuNDUsMi4yODRsLTMuNzU1LDAuNzkyYy0wLjQxMi0wLjc4OS0xLjAzNy0xLjQ0NS0yLjI2MS0xLjE4N2MtMC42NzUsMC4xNDMtMS4xMjMsMC41MjEtMS4zMjEsMC45MzZjLTAuMjQ0LDAuNTExLTAuMzY0LDEuMDg0LDAuMjE5LDMuODA4YzAuNTgzLDIuNzI0LDAuOTI3LDMuMTk4LDEuMzU4LDMuNTY2YzAuMzUxLDAuMjk4LDAuOTE2LDAuNDY0LDEuNTkxLDAuMzIxYzEuMjI1LTAuMjU4LDEuNTI2LTEuMTEsMS41OC0xLjk5N2wzLjc1NS0wLjc5M2MwLjA4OCwxLjk0Mi0wLjUxMywzLjQ0OS0xLjU3NCw0LjQ5MWgxLjQyOGMwLjUwOSwwLDAuOTIzLTAuNDExLDAuOTI2LTAuOTIxVjIxLjk2OEMzOC4xMTYsMjEuNDU2LDM3LjcwMSwyMS4wNDMsMzcuMTksMjEuMDQzeiIvPjwvc3ZnPg%3D%3D)](https://contao.org/) [![Version](https://img.shields.io/packagist/v/stefansl/contao-divider-bundle.svg?style=flat-square)](https://packagist.org/packages/stefansl/contao-divider-bundle) [![GitHub license](https://img.shields.io/badge/license-GPL-blue.svg?style=flat-square)](https://raw.githubusercontent.com/stefansl/contao-divider-bundle/master/LICENSE)


Divider
=======

Content element and form field for Contao to generate a simple hr (horizontal rule).
Simply choose the element type "divider" and save.

See the demo here: https://demo.clickpress.de/index.php/divider.html

## Requirements

- PHP 8.1+
- Contao 5.3 or Contao 6

Use version 1.x for Contao 4.

## Installation

Install with the Contao Manager or with Composer:

```bash
composer require stefansl/contao-divider-bundle
```

## Templates

| Element          | Template                                                       |
|------------------|----------------------------------------------------------------|
| Content element  | `content_element/divider.html.twig` (wrapper class `content-divider`) |
| Form field       | `form_divider.html.twig`                                       |

The content element is a fragment controller with a modern Twig template. Its
wrapper used to have the class `ce_divider`, it now has the class
`content-divider` like all Contao 5 content elements. Custom variants of the
template go into `templates/content_element/divider/`.

## Upgrading from version 1

- The legacy templates `ce_divider.html5` and `form_divider.html5` have been
  replaced by Twig templates. Convert your customized templates.
- Adjust CSS that targets `.ce_divider` to `.content-divider`.
- The classes `StefanSl\DividerBundle\ContentDivider` and
  `StefanSl\DividerBundle\WidgetDivider` have been replaced by
  `StefanSl\DividerBundle\Controller\ContentElement\DividerController` and
  `StefanSl\DividerBundle\Widget\FormDivider`.
