<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        // admin
        if ('/admin' === $pathinfo) {
            return array (  '_controller' => 'App\\Controller\\AdminController::admin',  '_route' => 'admin',);
        }

        // afficher_partie
        if (0 === strpos($pathinfo, '/afficher') && preg_match('#^/afficher/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'afficher_partie')), array (  '_controller' => 'App\\Controller\\JeuController::afficherPartie',));
        }

        if (0 === strpos($pathinfo, '/c')) {
            if (0 === strpos($pathinfo, '/ch')) {
                // changer_etat
                if ('/changer_etat' === $pathinfo) {
                    return array (  '_controller' => 'App\\Controller\\AdminController::changer_etat',  '_route' => 'changer_etat',);
                }

                // chat
                if ('/chat' === $pathinfo) {
                    return array (  '_controller' => 'App\\Controller\\ChatController::chat',  '_route' => 'chat',);
                }

                // ch
                if ('/ch' === $pathinfo) {
                    return array (  '_controller' => 'App\\Controller\\ChatController::ch',  '_route' => 'ch',);
                }

                if (0 === strpos($pathinfo, '/changer_')) {
                    // changer_infos
                    if ('/changer_infos' === $pathinfo) {
                        return array (  '_controller' => 'App\\Controller\\UserController::change_infos',  '_route' => 'changer_infos',);
                    }

                    // changer_pseudo
                    if ('/changer_pseudo' === $pathinfo) {
                        return array (  '_controller' => 'App\\Controller\\UserController::changer_pseudo',  '_route' => 'changer_pseudo',);
                    }

                    // changer_email
                    if ('/changer_email' === $pathinfo) {
                        return array (  '_controller' => 'App\\Controller\\UserController::changer_email',  '_route' => 'changer_email',);
                    }

                    // changer_mdp
                    if ('/changer_mdp' === $pathinfo) {
                        return array (  '_controller' => 'App\\Controller\\UserController::changer_mdp',  '_route' => 'changer_mdp',);
                    }

                }

            }

            // creer_partie
            if ('/creer' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\JeuController::creerPartie',  '_route' => 'creer_partie',);
            }

            // classement
            if ('/classement' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\UserController::classement',  '_route' => 'classement',);
            }

        }

        // envoyer
        if ('/envoyer' === $pathinfo) {
            return array (  '_controller' => 'App\\Controller\\ChatController::envoyer',  '_route' => 'envoyer',);
        }

        // index
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'App\\Controller\\IndexController::index',  '_route' => 'index',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_index;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'index'));
            }

            return $ret;
        }
        not_index:

        // user
        if ('/user' === $pathinfo) {
            return array (  '_controller' => 'App\\Controller\\IndexController::user',  '_route' => 'user',);
        }

        // regles
        if ('/regles' === $pathinfo) {
            return array (  '_controller' => 'App\\Controller\\IndexController::regles',  '_route' => 'regles',);
        }

        // user_registration
        if ('/register' === $pathinfo) {
            return array (  '_controller' => 'App\\Controller\\RegistrationController::registerAction',  '_route' => 'user_registration',);
        }

        // nouvelle_partie
        if ('/nouvelle_partie' === $pathinfo) {
            return array (  '_controller' => 'App\\Controller\\JeuController::nouvellePartie',  '_route' => 'nouvelle_partie',);
        }

        // get_infos
        if (0 === strpos($pathinfo, '/get_infos') && preg_match('#^/get_infos/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_infos')), array (  '_controller' => 'App\\Controller\\JeuController::get_infos',));
        }

        // get_vainqueur
        if (0 === strpos($pathinfo, '/get_vainqueur') && preg_match('#^/get_vainqueur/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_vainqueur')), array (  '_controller' => 'App\\Controller\\JeuController::get_vainqueur',));
        }

        // security_login
        if ('/login' === $pathinfo) {
            return array (  '_controller' => 'App\\Controller\\SecurityControllerPhpController::login',  '_route' => 'security_login',);
        }

        // security_logout
        if ('/logout' === $pathinfo) {
            return array (  '_controller' => 'App\\Controller\\SecurityControllerPhpController::logout',  '_route' => 'security_logout',);
        }

        // player
        if ('/profil' === $pathinfo) {
            return array (  '_controller' => 'App\\Controller\\UserController::player',  '_route' => 'player',);
        }

        if (0 === strpos($pathinfo, '/_')) {
            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not__profiler_home;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }
                not__profiler_home:

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
