<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),
            new Symfony\Bundle\MonologBundle\MonologBundle(),
            new Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
            new Symfony\Bundle\AsseticBundle\AsseticBundle(),
            new Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
            new Doctrine\Bundle\FixturesBundle\DoctrineFixturesBundle(),
            new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),
            new JMS\AopBundle\JMSAopBundle(),
            new JMS\DiExtraBundle\JMSDiExtraBundle($this),
            new JMS\SecurityExtraBundle\JMSSecurityExtraBundle(),
            new APY\DataGridBundle\APYDataGridBundle(),
            new Stof\DoctrineExtensionsBundle\StofDoctrineExtensionsBundle(),
//            new Userfriendly\Bundle\SocialUserBundle\UserfriendlySocialUserBundle(),
            new FOS\UserBundle\FOSUserBundle(),
//            new HWI\Bundle\OAuthBundle\HWIOAuthBundle(),
            //new HWI\OAuthBundle\HWIOAuthBundle(),
            // application bundle
            new Imbc\TankopediaBundle\ImbcTankopediaBundle(),
            new Imbc\UserBundle\ImbcUserBundle(),
            new Imbc\WebsiteBundle\ImbcWebsiteBundle()
        );

        if (in_array($this->getEnvironment(), array('dev', 'test'))) {
            $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
            $bundles[] = new Sensio\Bundle\DistributionBundle\SensioDistributionBundle();
            $bundles[] = new Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle();
            $bundles[] = new RaulFraile\Bundle\LadybugBundle\RaulFraileLadybugBundle(); // custom var_dump
            $bundles[] = new Lsw\VersionInformationBundle\LswVersionInformationBundle(); // git watch
            $bundles[] = new Elao\WebProfilerExtraBundle\WebProfilerExtraBundle(); // extra info
        }

        return $bundles;
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load(__DIR__.'/config/config_'.$this->getEnvironment().'.yml');
    }
}
