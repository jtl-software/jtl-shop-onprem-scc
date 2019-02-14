<?php declare(strict_types=1);
/**
 * @copyright (c) JTL-Software-GmbH
 * @license       http://jtl-url.de/jtlshoplicense
 */

namespace scc;

use scc\components\Alert;
use scc\components\Badge;
use scc\components\Breadcrumb;
use scc\components\BreadcrumbItem;
use scc\components\Button;
use scc\components\ButtonGroup;
use scc\components\ButtonToolbar;
use scc\components\Card;
use scc\components\CardBody;
use scc\components\CardFooter;
use scc\components\CardGroup;
use scc\components\CardHeader;
use scc\components\CardImg;
use scc\components\Carousel;
use scc\components\CarouselSlide;
use scc\components\Checkbox;
use scc\components\CheckboxGroup;
use scc\components\Col;
use scc\components\Collapse;
use scc\components\Container;
use scc\components\CSRFToken;
use scc\components\DropDown;
use scc\components\DropDownDivider;
use scc\components\DropDownItem;
use scc\components\Embed;
use scc\components\Form;
use scc\components\FormGroup;
use scc\components\FormRow;
use scc\components\Image;
use scc\components\Input;
use scc\components\InputFile;
use scc\components\InputGroup;
use scc\components\InputGroupAddon;
use scc\components\InputGroupAppend;
use scc\components\InputGroupPrepend;
use scc\components\InputGroupText;
use scc\components\Jumbotron;
use scc\components\Link;
use scc\components\ListGroup;
use scc\components\ListGroupItem;
use scc\components\Media;
use scc\components\MediaAside;
use scc\components\MediaBody;
use scc\components\Modal;
use scc\components\Nav;
use scc\components\Navbar;
use scc\components\NavbarBrand;
use scc\components\NavbarNav;
use scc\components\NavbarToggle;
use scc\components\NavForm;
use scc\components\NavItem;
use scc\components\NavItemDropdown;
use scc\components\NavText;
use scc\components\Pagination;
use scc\components\Progress;
use scc\components\Radio;
use scc\components\RadioGroup;
use scc\components\Row;
use scc\components\Select;
use scc\components\Tab;
use scc\components\Tabs;
use scc\components\Textarea;

/**
 * Class DefaultComponentRegistrator
 * @package scc
 */
class DefaultComponentRegistrator
{
    /**
     * @var RendererInterface
     */
    protected $renderer;

    /**
     * DefaultComponentRegistrator constructor.
     * @param RendererInterface $renderer
     */
    public function __construct(RendererInterface $renderer)
    {
        $this->renderer = $renderer;
    }

    /**
     *
     */
    public function registerComponents(): void
    {
        $this->renderer->registerComponent(new Card());
        $this->renderer->registerComponent(new Input());
        $this->renderer->registerComponent(new Link());
        $this->renderer->registerComponent(new Button());
        $this->renderer->registerComponent(new ListGroup());
        $this->renderer->registerComponent(new ListGroupItem());
        $this->renderer->registerComponent(new Modal());
        $this->renderer->registerComponent(new Tabs());
        $this->renderer->registerComponent(new Tab());
        $this->renderer->registerComponent(new Badge());
        $this->renderer->registerComponent(new Image());
        $this->renderer->registerComponent(new Alert());
        $this->renderer->registerComponent(new Jumbotron());
        $this->renderer->registerComponent(new DropDown());
        $this->renderer->registerComponent(new DropDownItem());
        $this->renderer->registerComponent(new DropDownDivider());
        $this->renderer->registerComponent(new ButtonGroup());
        $this->renderer->registerComponent(new ButtonToolbar());
        $this->renderer->registerComponent(new Carousel());
        $this->renderer->registerComponent(new CarouselSlide());
        $this->renderer->registerComponent(new MediaAside());
        $this->renderer->registerComponent(new MediaBody());
        $this->renderer->registerComponent(new Media());
        $this->renderer->registerComponent(new Checkbox());
        $this->renderer->registerComponent(new CheckboxGroup());
        $this->renderer->registerComponent(new Radio());
        $this->renderer->registerComponent(new RadioGroup());
        $this->renderer->registerComponent(new FormGroup());
        $this->renderer->registerComponent(new Select());
        $this->renderer->registerComponent(new Textarea());
        $this->renderer->registerComponent(new InputFile());
        $this->renderer->registerComponent(new Form());
        $this->renderer->registerComponent(new InputGroup());
        $this->renderer->registerComponent(new InputGroupAddon());
        $this->renderer->registerComponent(new InputGroupAppend());
        $this->renderer->registerComponent(new InputGroupPrepend());
        $this->renderer->registerComponent(new InputGroupText());
        $this->renderer->registerComponent(new Container());
        $this->renderer->registerComponent(new Row());
        $this->renderer->registerComponent(new Col());
        $this->renderer->registerComponent(new FormRow());
        $this->renderer->registerComponent(new Pagination());
        $this->renderer->registerComponent(new Embed());
        $this->renderer->registerComponent(new CardGroup());
        $this->renderer->registerComponent(new CardBody());
        $this->renderer->registerComponent(new CardHeader());
        $this->renderer->registerComponent(new CardFooter());
        $this->renderer->registerComponent(new CardImg());
        $this->renderer->registerComponent(new Nav());
        $this->renderer->registerComponent(new NavForm());
        $this->renderer->registerComponent(new NavText());
        $this->renderer->registerComponent(new NavItem());
        $this->renderer->registerComponent(new NavItemDropdown());
        $this->renderer->registerComponent(new Navbar());
        $this->renderer->registerComponent(new NavbarNav());
        $this->renderer->registerComponent(new NavbarBrand());
        $this->renderer->registerComponent(new NavbarToggle());
        $this->renderer->registerComponent(new Collapse());
        $this->renderer->registerComponent(new Progress());
        $this->renderer->registerComponent(new Breadcrumb());
        $this->renderer->registerComponent(new BreadcrumbItem());
        $this->renderer->registerComponent(new CSRFToken());
    }
}
