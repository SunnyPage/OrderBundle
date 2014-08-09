<?php
/*
 * WellCommerce Open-Source E-Commerce Platform
 * 
 * This file is part of the WellCommerce package.
 *
 * (c) Adam Piotrowski <adam@wellcommerce.org>
 * 
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 */

namespace WellCommerce\Bundle\CoreBundle\Form\Builder;

use Doctrine\Entity;
use WellCommerce\Bundle\CoreBundle\Form\Conditions\ConditionInterface;
use WellCommerce\Bundle\CoreBundle\Form\Elements\ElementInterface;
use WellCommerce\Bundle\CoreBundle\Form\FormInterface;
use WellCommerce\Bundle\CoreBundle\Model\ModelInterface;
use WellCommerce\Bundle\CoreBundle\Form\Elements;
use WellCommerce\Bundle\CoreBundle\Form\Rules;
use WellCommerce\Bundle\CoreBundle\Form\Filters;
use WellCommerce\Bundle\CoreBundle\Form\Conditions;

/**
 * Interface FormBuilderInterface
 *
 * @package WellCommerce\Bundle\CoreBundle\Form
 * @author  Adam Piotrowski <adam@wellcommerce.org>
 */
interface FormBuilderInterface
{
    /**
     * form.init event name
     */
    const FORM_INIT_EVENT = 'form.init';

    /**
     * Creates the form, triggers init event and then populates form with values
     *
     * @param FormInterface $form
     * @param array|object  $data
     * @param array         $options
     *
     * @return mixed
     */
    public function create(FormInterface $form, $data = null, array $options);

    /**
     * Returns Form object
     *
     * @return Elements\Form
     */
    public function getForm();

    /**
     * Returns form data
     *
     * @return object|null
     */
    public function getData();

    /**
     * Sets form options
     *
     * @param array $options
     *
     * @return void
     */
    public function setOptions(array $options);

    /**
     * Returns form options
     *
     * @return array
     */
    public function getOptions();

    /**
     * Sets new form data
     *
     * @return mixed
     */
    public function setData(array $data);

    /**
     * Shortcut for adding Form
     *
     * @param array $options
     *
     * @return Elements\Form
     */
    public function addForm(array $options);

    /**
     * Shortcut for adding Fieldset node
     *
     * @param array $options
     *
     * @return Elements\Fieldset
     */
    public function addFieldset(array $options);

    /**
     * Shortcut for adding FieldsetRepeatable node
     *
     * @param array $options
     *
     * @return Elements\FieldsetRepeatable
     */
    public function addFieldsetRepeatable(array $options);

    /**
     * Shortcut for adding LayoutBoxesList element
     *
     * @param array $options
     *
     * @return Elements\FieldsetRepeatable
     */
    public function addLayoutBoxesList(array $options);

    /**
     * Shortcut for adding FieldsetLanguage node
     *
     * @param array $options
     *
     * @return Elements\FieldsetLanguage
     */
    public function addFieldsetLanguage(array $options);

    /**
     * Shortcut for adding Image element
     *
     * @param $options
     *
     * @return Elements\Image
     */
    public function addImage($options);

    /**
     * Shortcut for adding LocalFile element
     *
     * @param $options
     *
     * @return Elements\LocalFile
     */
    public function addLocalFile($options);

    /**
     * Shortcut for adding Tip element
     *
     * @param $options
     *
     * @return Elements\Tip
     */
    public function addTip($options);

    /**
     * Shortcut for adding TextField element
     *
     * @param array $options
     *
     * @return Elements\TextField
     */
    public function addTextField(array $options);

    /**
     * Shortcut for adding Password element
     *
     * @param array $options
     *
     * @return Elements\Password
     */
    public function addPassword(array $options);

    /**
     * Shortcut for adding Submit buttons
     *
     * @param array $options
     *
     * @return Elements\Submit
     */
    public function addSubmitButton(array $options);

    /**
     * Shortcut for adding Textarea element
     *
     * @param array $options
     *
     * @return Elements\Textarea
     */
    public function addTextArea(array $options);

    /**
     * Shortcut for adding RichTextEditor element
     *
     * @param array $options
     *
     * @return Elements\RichTextEditor
     */
    public function addRichTextEditor(array $options);

    /**
     * Shortcut for adding ShopSelector element
     *
     * @param array $options
     *
     * @return Elements\ShopSelector
     */
    public function addShopSelector(array $options);

    /**
     * Shortcut for adding Select element
     *
     * @param array $options
     *
     * @return Elements\Select
     */
    public function addSelect(array $options);

    /**
     * Shortcut for adding MultiSelect element
     *
     * @param array $options
     *
     * @return Elements\MultiSelect
     */
    public function addMultiSelect(array $options);

    /**
     * Shortcut for adding Checkbox element
     *
     * @param array $options
     *
     * @return Elements\Checkbox
     */
    public function addCheckBox(array $options);

    /**
     * Shortcut for adding StaticText element
     *
     * @param array $options
     *
     * @return Elements\StaticText
     */
    public function addStaticText(array $options);

    /**
     * Shortcut for adding AttributeEditor element
     *
     * @param array $options
     *
     * @return Elements\AttributeEditor
     */
    public function addAttributeEditor(array $options);

    /**
     * Shortcut for adding Price element
     *
     * @param array $options
     *
     * @return Elements\Price
     */
    public function addPrice(array $options);

    /**
     * Shortcut for adding filter CommaToDotChanger
     *
     * @return Filters\CommaToDotChanger
     */
    public function addFilterCommaToDotChanger();

    /**
     * Shortcut for adding filter NoCode
     *
     * @return Filters\NoCode
     */
    public function addFilterNoCode();

    /**
     * Shortcut for adding filter Trim
     *
     * @return Filters\Trim
     */
    public function addFilterTrim();

    /**
     * Shortcut for adding filter Secure
     *
     * @return Filters\Secure
     */
    public function addFilterSecure();

    /**
     * Shortcut for adding rule Format
     *
     * @param $errorMessage
     * @param $pattern
     *
     * @return Rules\Format
     */
    public function addRuleFormat($errorMessage, $pattern);

    /**
     * Shortcut for adding rule Email
     *
     * @param $errorMessage
     *
     * @return Rules\Email
     */
    public function addRuleEmail($errorMessage);

    /**
     * Shortcut for adding rule Custom
     *
     * @param          $errorMessage
     * @param callable $function
     * @param array    $params
     *
     * @return Rules\Custom
     */
    public function addRuleCustom($errorMessage, \Closure $function, array $params = []);

    /**
     * Shortcut for adding rule Required
     *
     * @param $errorMessage
     *
     * @return Rules\Required
     */
    public function addRuleRequired($errorMessage);

    /**
     * Shortcut for adding rule Unique
     *
     * @param       $errorMessage
     * @param array $options
     *
     * @return Rules\Unique
     */
    public function addRuleUnique($errorMessage, array $options);

    /**
     * Shortcut for adding rule LanguageUnique
     *
     * @param       $errorMessage
     * @param array $options
     *
     * @return Rules\LanguageUnique
     */
    public function addRuleLanguageUnique($errorMessage, array $options);

    /**
     * Processes options for using them in Select
     *
     * @param      $options
     * @param bool $appendDefaultValue
     *
     * @return array
     */
    public function makeOptions($options, $appendDefaultValue = false);

    /**
     * Shortcut for adding Tree element
     *
     * @param array $options
     *
     * @return Elements\Tree
     */
    public function addTree(array $options);

    /**
     * Shortcut for adding SortableList element
     *
     * @param array $options
     *
     * @return Elements\Tree
     */
    public function addSortableList(array $options);

    /**
     * Shortcut for adding RangeEditor element
     *
     * @param array $options
     *
     * @return Elements\RangeEditor
     */
    public function addRangeEditor(array $options);

    /**
     * Shortcut for adding Dependency
     *
     * @param                    $type
     * @param ElementInterface   $element
     * @param ConditionInterface $condition
     * @param                    $argument
     *
     * @return Dependency
     */
    public function addDependency($type, ElementInterface $element, ConditionInterface $condition, $argument);
}