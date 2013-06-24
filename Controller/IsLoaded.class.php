<?php

namespace Site\ReverseBundle\Controller;

	use Symfony\Bundle\FrameworkBundle\Controller\Controller;

	use Site\ReverseBundle\Entity\Site;
	use Site\ReverseBundle\Form\SiteType;

	use Site\ReverseBundle\Entity\Article;
        use Site\ReverseBundle\Form\ArticleType;

        use Site\ReverseBundle\Entity\Publication;
        use Site\ReverseBundle\Form\PublicationType;

        use Site\ReverseBundle\Entity\Submit;
        use Site\ReverseBundle\Form\SubmitType;

        use Site\ReverseBundle\Entity\Warning;
        use Site\ReverseBundle\Form\WarningType;

        use Site\ReverseBundle\Entity\Contact;
        use Site\ReverseBundle\Form\ContactType;

class IsLoaded extends Controller
        {


		public function IsLoadedAction()
		{
                $em = $this->getDoctrine()->getManager();
                $article = $em->getRepository("SiteReverseBundle:Article")->findAll();
                $publication = $em->getRepository("SiteReverseBundle:Publication")->findAll();
                $submit = $em->getRepository("SiteReverseBundle:Submit")->findAll();
                $warning = $em->getRepository("SiteReverseBundle:Warning")->findAll();
                $site = $em->getRepository("SiteReverseBundle:Site")->findOneById(0);

                return $this->$article;
                                      /*  'publication' => $publication,
                                        'submit' => $submit,
                                        'warning' => $warning,
                                        'site' => $site,
                                );*/

	}




}

?>
