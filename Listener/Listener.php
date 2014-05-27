<?php
namespace Ump\TutoBundle\Listener;
use JMS\DiExtraBundle\Annotation as DI;
use Claroline\CoreBundle\Event\DisplayWidgetEvent;
use Claroline\CoreBundle\Event\DisplayToolEvent;
use Symfony\Component\DependencyInjection\ContainerInterface;
    
/**
 * @DI\Service()
 */
class Listener
{
    private $container;
    /**
     *@DI\Injectparams({
     *  "container" = @DI\Inject("service_container")
     *  })  
     */
    public function __construct(ContainerInterface $container)
    {
    $this->container = $container;
    }
    /**
     * @DI\Observe("widget_ump_tuto_widget")
     */
    public function onDisplay(DisplayWidgetEvent $event)
    {
        $event->setContent('tuto widget content');
        $event->stopPropagation();
    
    }
    /**
     * @DI\Observe("open_tool_desktop_ump_tuto_tool")
     */
    public function onOpen(DisplayToolEvent $event)
    {
        $em = $this->container->get('doctrine.orm.entity_manager');
        $items = $em->getRepository('Ump\TutoBundle\Entity\Item')->findAll();
        $twig = $this->container->get('templating');
        $content = $twig->render('UmpTutoBundle::toolindex.html.twig',
            array('items'=>$items));
        $event->setContent($content);
        $event->stopPropagation();
    }
}
