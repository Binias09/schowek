<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\DataFixtures\ORM;


use Doctrine\Common\DataFixtures\FixtureInterface;

use Doctrine\Common\Persistence\ObjectManager;

/**
 * Description of LoadPostData
 *
 * @author Biniu
 */
class LoadUserData implements FixtureInterface
{
      public function load(ObjectManager $manager){

               $faker = \Faker\Factory::create();
               
         for ($i=0; $i<=100; $i++){
             $post=new \AppBundle\Entity\Post();
             $post->setTitle($faker->sentence(4));
             $post->setLead($faker->text(200));
             $post->setContent($faker->text(700));
             $post->setCreatedAt($faker->dateTimeThisMonth);
             $manager->persist($post);
        
             }
         $manager->flush();
     } 
}
