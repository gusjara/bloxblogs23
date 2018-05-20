<?php

namespace Blog\BlogBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use MWSimple\Bundle\AdminCrudBundle\Controller\DefaultController as Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Blog\BlogBundle\Entity\Post;
use Blog\BlogBundle\Form\PostType;
use Blog\BlogBundle\Form\PostFilterType;

/**
 * Post controller.
 * @author Nombre Apellido <name@gmail.com>
 *
 * @Route("/admin/post")
 */
class PostController extends Controller
{
    /**
     * Configuration file.
     */
    protected $config = array(
        'yml' => 'Blog/BlogBundle/Resources/config/Post.yml',
    );

    /**
     * Lists all Post entities.
     *
     * @Route("/", name="admin_post")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $this->config['filterType'] = new PostFilterType();
        $response = parent::indexAction();

        return $response;
    }

    /**
     * Creates a new Post entity.
     *
     * @Route("/", name="admin_post_create")
     * @Method("POST")
     * @Template("BlogBundle:Post:new.html.twig")
     */
    public function createAction()
    {
        $this->config['newType'] = new PostType();
        $response = parent::createAction();

        return $response;
    }

    /**
     * Displays a form to create a new Post entity.
     *
     * @Route("/new", name="admin_post_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $this->config['newType'] = new PostType();
        $response = parent::newAction();

        return $response;
    }

    /**
     * Finds and displays a Post entity.
     *
     * @Route("/{id}", name="admin_post_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $response = parent::showAction($id);

        return $response;
    }

    /**
     * Displays a form to edit an existing Post entity.
     *
     * @Route("/{id}/edit", name="admin_post_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $this->config['editType'] = new PostType();
        $response = parent::editAction($id);

        return $response;
    }

    /**
     * Edits an existing Post entity.
     *
     * @Route("/{id}", name="admin_post_update")
     * @Method("PUT")
     * @Template("BlogBundle:Post:edit.html.twig")
     */
    public function updateAction($id)
    {
        $this->config['editType'] = new PostType();
        $response = parent::updateAction($id);

        return $response;
    }

    /**
     * Deletes a Post entity.
     *
     * @Route("/{id}", name="admin_post_delete")
     * @Method("DELETE")
     */
    public function deleteAction($id)
    {
        $response = parent::deleteAction($id);

        return $response;
    }

    /**
     * Exporter Post.
     *
     * @Route("/exporter/{format}", name="admin_post_export")
     */
    public function getExporter($format)
    {
        $response = parent::exportCsvAction($format);

        return $response;
    }

    /**
     * Autocomplete a Post entity.
     *
     * @Route("/autocomplete-forms/get-categoria", name="Post_autocomplete_categoria")
     */
    public function getAutocompleteCategoria()
    {
        $options = array(
            'repository' => "BlogBlogBundle:Categoria",
            'field'      => "id",
        );
        $response = parent::getAutocompleteFormsMwsAction($options);

        return $response;
    }

    /**
     * Autocomplete a Post entity.
     *
     * @Route("/autocomplete-forms/get-tags", name="Post_autocomplete_tags")
     */
    public function getAutocompleteTag()
    {
        $options = array(
            'repository' => "BlogBlogBundle:Tag",
            'field'      => "id",
        );
        $response = parent::getAutocompleteFormsMwsAction($options);

        return $response;
    }
}