<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

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

                // document_document_updatedoc
                if (preg_match('#^/documents/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_document_document_updatedoc;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'document_document_updatedoc')), array (  '_controller' => 'DocumentBundle\\Controller\\DocumentController::updateDocAction',));
                }
                not_document_document_updatedoc:

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

                // update_doc
                if (preg_match('#^/documents/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_update_doc;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'update_doc')), array (  '_controller' => 'DocumentBundle\\Controller\\DocumentController::updateDocAction',  '_format' => NULL,));
                }
                not_update_doc:

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
            // update
            if (preg_match('#^/candidat/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'update')), array (  '_controller' => 'CandidatBundle\\Controller\\CandidatController::updateAction',  '_format' => NULL,));
            }
            not_update:

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
            if (preg_match('#^/candidat/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_get_candidat;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_candidat')), array (  '_controller' => 'CandidatBundle\\Controller\\CandidatController::getCandidatAction',  '_format' => NULL,));
            }
            not_get_candidat:

            // post_candidats
            if ($pathinfo === '/candidat') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_post_candidats;
                }

                return array (  '_controller' => 'CandidatBundle\\Controller\\CandidatController::postCandidatsAction',  '_format' => NULL,  '_route' => 'post_candidats',);
            }
            not_post_candidats:

            // delete_candidat
            if (preg_match('#^/candidat/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_delete_candidat;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_candidat')), array (  '_controller' => 'CandidatBundle\\Controller\\CandidatController::deleteCandidatAction',  '_format' => NULL,));
            }
            not_delete_candidat:

            // put_candidat
            if (preg_match('#^/candidat/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_put_candidat;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'put_candidat')), array (  '_controller' => 'CandidatBundle\\Controller\\CandidatController::putCandidatAction',  '_format' => NULL,));
            }
            not_put_candidat:

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
