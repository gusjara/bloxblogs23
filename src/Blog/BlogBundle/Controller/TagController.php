<?php

namespace Blog\BlogBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use MWSimple\Bundle\AdminCrudBundle\Controller\DefaultController as Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Blog\BlogBundle\Entity\Tag;
use Blog\BlogBundle\Form\TagType;
use Blog\BlogBundle\Form\TagFilterType;

/**
 * Tag controller.
 * @author Nombre Apellido <name@gmail.com>
 *
 * @Route("/admin/tag")
 */
class TagController extends Controller
{
    /**
     * Configuration file.
     */
    protected $config = array(
        'yml' => 'Blog/BlogBundle/Resources/config/Tag.yml',
    );

    /**
     * Lists all Tag entities.
     *
     * @Route("/", name="admin_tag")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $this->config['filterType'] = new TagFilterType();
        $response = parent::indexAction();

        return $response;
    }

    /**
     * Creates a new Tag entity.
     *
     * @Route("/", name="admin_tag_create")
     * @Method("POST")
     * @Template("BlogBundle:Tag:new.html.twig")
     */
    public function createAction()
    {
        $this->config['newType'] = new TagType();
        $response = parent::createAction();

        return $response;
    }

    /**
     * Displays a form to create a new Tag entity.
     *
     * @Route("/new", name="admin_tag_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $this->config['newType'] = new TagType();
        $response = parent::newAction();

        return $response;
    }

    /**
     * Finds and displays a Tag entity.
     *
     * @Route("/{id}", name="admin_tag_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $response = parent::showAction($id);

        return $response;
    }

    /**
     * Displays a form to edit an existing Tag entity.
     *
     * @Route("/{id}/edit", name="admin_tag_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $this->config['editType'] = new TagType();
        $response = parent::editAction($id);

        return $response;
    }

    /**
     * Edits an existing Tag entity.
     *
     * @Route("/{id}", name="admin_tag_update")
     * @Method("PUT")
     * @Template("BlogBundle:Tag:edit.html.twig")
     */
    public function updateAction($id)
    {
        $this->config['editType'] = new TagType();
        $response = parent::updateAction($id);

        return $response;
    }

    /**
     * Deletes a Tag entity.
     *
     * @Route("/{id}", name="admin_tag_delete")
     * @Method("DELETE")
     */
    public function deleteAction($id)
    {
        $response = parent::deleteAction($id);

        return $response;
    }

    /**
     * Exporter Tag.
     *
     * @Route("/exporter/{format}", name="admin_tag_export")
     */
    public function getExporter($format)
    {
        $response = parent::exportCsvAction($format);

        return $response;
    }

    /**
     * Autocomplete a Tag entity.
     *
     * @Route("/autocomplete-forms/get-posts", name="Tag_autocomplete_posts")
     */
    public function getAutocompletePost()
    {
        $options = array(
            'repository' => "BlogBlogBundle:Post",
            'field'      => "id",
        );
        $response = parent::getAutocompleteFormsMwsAction($options);

        return $response;
    }
}