<?php

/*
 * This file is part of the CategorySalesRankingBlock
 *
 * Copyright (C) 2017 kurozumi
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plugin\CategorySalesRankingBlock\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormError;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;

class CategorySalesRankingBlockConfigType extends AbstractType
{
    private $app;

    public function __construct($app)
    {
        $this->app = $app;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $app = $this->app;

        $arrCategory = $app['eccube.repository.category']->getList(null, true);

        $builder
            ->add('interval_number', 'number', array(
                'label' => '数値',
                'required' => true,
                'constraints' => array(
                    new Assert\GreaterThanOrEqual(1),
                ),
            ))
            ->add('interval_unit', 'choice', array(
                'label' => '単位',
                'required' => true,
                'choices' => array("year" => "年", "month" => "月", "day" => "日")
            ))
            ->add('num_items', 'number', array(
                'label' => '表示件数',
                'required' => true,
                'constraints' => array(
                    new Assert\GreaterThanOrEqual(1),
                ),
            ))
            ->add('aggregation_type', 'choice', array(
                'label' => '集計方法',
                'required' => true,
                'choices' => array("count" => "売上個数", "sales" => "売上金額")
            ))
            ->add('Category', 'entity', array(
                'class' => 'Eccube\Entity\Category',
                'property' => 'NameWithLevel',
                'label' => '商品カテゴリ',
                // Choices list (overdrive mapped)
                'choices' => $arrCategory,
                'empty_value' => 'すべてのカテゴリ',
                'empty_data' => null,
                'required' => false,
            ))
            ->addEventListener(FormEvents::POST_SUBMIT, function (FormEvent $event) use ($app) {
                $form = $event->getForm();
                $data = $form->getData();

                switch($data['interval_unit']){
                    case 'year':
                        break;
                    case 'month':
                        if($data['interval_number'] > 12) {
                            $form['interval_number']->addError(
                                new FormError($app->trans('plugin.category_sales_ranking_block.type.interval_number.error'))
                            );
                        }
                        break;
                    case 'day':
                        break;
                }
            });
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(
            array(
                'data_class' => 'Plugin\CategorySalesRankingBlock\Entity\Config',
            )
        );
    }

    public function getName()
    {
        return 'category_sales_ranking_block_config';
    }

}
