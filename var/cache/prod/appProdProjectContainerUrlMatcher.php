<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/document')) {
            if (0 === strpos($pathinfo, '/documents')) {
                // document_document_getdocuments
                if ($pathinfo === '/documents') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_document_document_getdocuments;
                    }

                    return array (  '_controller' => 'DocumentBundle\\Controller\\DocumentController::getDocumentsAction',  '_route' => 'document_document_getdocuments',);
                }
                not_document_document_getdocuments:

                // document_document_getdocument
                if (preg_match('#^/documents/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_document_document_getdocument;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'document_document_getdocument')), array (  '_controller' => 'DocumentBundle\\Controller\\DocumentController::getDocumentAction',));
                }
                not_document_document_getdocument:

                // document_document_postdocuments
                if ($pathinfo === '/documents') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_document_document_postdocuments;
                    }

                    return array (  '_controller' => 'DocumentBundle\\Controller\\DocumentController::postDocumentsAction',  '_route' => 'document_document_postdocuments',);
                }
                not_document_document_postdocuments:

                // document_document_removedocument
                if (preg_match('#^/documents/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_document_document_removedocument;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'document_document_removedocument')), array (  '_controller' => 'DocumentBundle\\Controller\\DocumentController::removeDocumentAction',));
                }
                not_document_document_removedocument:

                // document_document_putdocument
                if (preg_match('#^/documents/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_document_document_putdocument;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'document_document_putdocument')), array (  '_controller' => 'DocumentBundle\\Controller\\DocumentController::putDocumentAction',));
                }
                not_document_document_putdocument:

            }

            // document_document_patchdocument
            if (preg_match('#^/document/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PATCH') {
                    $allow[] = 'PATCH';
                    goto not_document_document_patchdocument;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'document_document_patchdocument')), array (  '_controller' => 'DocumentBundle\\Controller\\DocumentController::patchDocumentAction',));
            }
            not_document_document_patchdocument:

        }

        // user_default_index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'user_default_index');
            }

            return array (  '_controller' => 'UserBundle\\Controller\\DefaultController::indexAction',  '_route' => 'user_default_index',);
        }

        if (0 === strpos($pathinfo, '/search_')) {
            // get_searchresult
            if (0 === strpos($pathinfo, '/search_result') && preg_match('#^/search_result/(?P<q>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_get_searchresult;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_searchresult')), array (  '_controller' => 'RechercheBundle\\Controller\\RechercheController::getSearchresultAction',  '_format' => NULL,));
            }
            not_get_searchresult:

            // get_searchlinkedin
            if (0 === strpos($pathinfo, '/search_linkedin') && preg_match('#^/search_linkedin/(?P<code>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_get_searchlinkedin;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_searchlinkedin')), array (  '_controller' => 'RechercheBundle\\Controller\\RechercheController::getSearchlinkedinAction',  '_format' => NULL,));
            }
            not_get_searchlinkedin:

        }

        // index
        if ($pathinfo === '/index') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_index;
            }

            return array (  '_controller' => 'DocumentBundle\\Controller\\DefaultController::indexAction',  '_format' => NULL,  '_route' => 'index',);
        }
        not_index:

        if (0 === strpos($pathinfo, '/document')) {
            if (0 === strpos($pathinfo, '/documents')) {
                // remove_document
                if (preg_match('#^/documents/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_remove_document;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'remove_document')), array (  '_controller' => 'DocumentBundle\\Controller\\DocumentController::removeDocumentAction',  '_format' => NULL,));
                }
                not_remove_document:

                // get_documents
                if ($pathinfo === '/documents') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_get_documents;
                    }

                    return array (  '_controller' => 'DocumentBundle\\Controller\\DocumentController::getDocumentsAction',  '_format' => NULL,  '_route' => 'get_documents',);
                }
                not_get_documents:

                // get_document
                if (preg_match('#^/documents/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_get_document;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_document')), array (  '_controller' => 'DocumentBundle\\Controller\\DocumentController::getDocumentAction',  '_format' => NULL,));
                }
                not_get_document:

                // post_documents
                if ($pathinfo === '/documents') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_post_documents;
                    }

                    return array (  '_controller' => 'DocumentBundle\\Controller\\DocumentController::postDocumentsAction',  '_format' => NULL,  '_route' => 'post_documents',);
                }
                not_post_documents:

                // put_document
                if (preg_match('#^/documents/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_put_document;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'put_document')), array (  '_controller' => 'DocumentBundle\\Controller\\DocumentController::putDocumentAction',  '_format' => NULL,));
                }
                not_put_document:

            }

            // patch_document
            if (preg_match('#^/document/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PATCH') {
                    $allow[] = 'PATCH';
                    goto not_patch_document;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'patch_document')), array (  '_controller' => 'DocumentBundle\\Controller\\DocumentController::patchDocumentAction',  '_format' => NULL,));
            }
            not_patch_document:

        }

        if (0 === strpos($pathinfo, '/candidat')) {
            if (0 === strpos($pathinfo, '/candidats')) {
                // remove_candidat
                if (preg_match('#^/candidats/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_remove_candidat;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'remove_candidat')), array (  '_controller' => 'CandidatBundle\\Controller\\CandidatController::removeCandidatAction',  '_format' => NULL,));
                }
                not_remove_candidat:

                // get_candidats
                if ($pathinfo === '/candidats') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_get_candidats;
                    }

                    return array (  '_controller' => 'CandidatBundle\\Controller\\CandidatController::getCandidatsAction',  '_format' => NULL,  '_route' => 'get_candidats',);
                }
                not_get_candidats:

                // get_candidat
                if (preg_match('#^/candidats/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_get_candidat;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_candidat')), array (  '_controller' => 'CandidatBundle\\Controller\\CandidatController::getCandidatAction',  '_format' => NULL,));
                }
                not_get_candidat:

                // post_candidats
                if ($pathinfo === '/candidats') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_post_candidats;
                    }

                    return array (  '_controller' => 'CandidatBundle\\Controller\\CandidatController::postCandidatsAction',  '_format' => NULL,  '_route' => 'post_candidats',);
                }
                not_post_candidats:

                // put_candidat
                if (preg_match('#^/candidats/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_put_candidat;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'put_candidat')), array (  '_controller' => 'CandidatBundle\\Controller\\CandidatController::putCandidatAction',  '_format' => NULL,));
                }
                not_put_candidat:

            }

            // patch_candidat
            if (preg_match('#^/candidat/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PATCH') {
                    $allow[] = 'PATCH';
                    goto not_patch_candidat;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'patch_candidat')), array (  '_controller' => 'CandidatBundle\\Controller\\CandidatController::patchCandidatAction',  '_format' => NULL,));
            }
            not_patch_candidat:

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
