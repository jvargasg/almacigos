<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
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

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/bandeja')) {
            // bandeja
            if (rtrim($pathinfo, '/') === '/bandeja') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_bandeja;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'bandeja');
                }

                return array (  '_controller' => 'Almacigos\\SiembraBundle\\Controller\\BandejaController::indexAction',  '_route' => 'bandeja',);
            }
            not_bandeja:

            // bandeja_create
            if ($pathinfo === '/bandeja/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_bandeja_create;
                }

                return array (  '_controller' => 'Almacigos\\SiembraBundle\\Controller\\BandejaController::createAction',  '_route' => 'bandeja_create',);
            }
            not_bandeja_create:

            // bandeja_new
            if ($pathinfo === '/bandeja/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_bandeja_new;
                }

                return array (  '_controller' => 'Almacigos\\SiembraBundle\\Controller\\BandejaController::newAction',  '_route' => 'bandeja_new',);
            }
            not_bandeja_new:

            // bandeja_show
            if (preg_match('#^/bandeja/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_bandeja_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'bandeja_show')), array (  '_controller' => 'Almacigos\\SiembraBundle\\Controller\\BandejaController::showAction',));
            }
            not_bandeja_show:

            // bandeja_edit
            if (preg_match('#^/bandeja/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_bandeja_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'bandeja_edit')), array (  '_controller' => 'Almacigos\\SiembraBundle\\Controller\\BandejaController::editAction',));
            }
            not_bandeja_edit:

            // bandeja_update
            if (preg_match('#^/bandeja/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_bandeja_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'bandeja_update')), array (  '_controller' => 'Almacigos\\SiembraBundle\\Controller\\BandejaController::updateAction',));
            }
            not_bandeja_update:

            // bandeja_delete
            if (preg_match('#^/bandeja/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_bandeja_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'bandeja_delete')), array (  '_controller' => 'Almacigos\\SiembraBundle\\Controller\\BandejaController::deleteAction',));
            }
            not_bandeja_delete:

        }

        if (0 === strpos($pathinfo, '/siembra')) {
            // siembra
            if (rtrim($pathinfo, '/') === '/siembra') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_siembra;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'siembra');
                }

                return array (  '_controller' => 'Almacigos\\SiembraBundle\\Controller\\SiembraController::indexAction',  '_route' => 'siembra',);
            }
            not_siembra:

            // siembra_create
            if (preg_match('#^/siembra/(?P<idPedido>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_siembra_create;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'siembra_create')), array (  '_controller' => 'Almacigos\\SiembraBundle\\Controller\\SiembraController::createAction',));
            }
            not_siembra_create:

            // siembra_new
            if (0 === strpos($pathinfo, '/siembra/new') && preg_match('#^/siembra/new/(?P<idPedido>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_siembra_new;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'siembra_new')), array (  '_controller' => 'Almacigos\\SiembraBundle\\Controller\\SiembraController::newAction',));
            }
            not_siembra_new:

            // siembra_show
            if (preg_match('#^/siembra/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_siembra_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'siembra_show')), array (  '_controller' => 'Almacigos\\SiembraBundle\\Controller\\SiembraController::showAction',));
            }
            not_siembra_show:

            // siembra_edit
            if (preg_match('#^/siembra/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_siembra_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'siembra_edit')), array (  '_controller' => 'Almacigos\\SiembraBundle\\Controller\\SiembraController::editAction',));
            }
            not_siembra_edit:

            // siembra_update
            if (preg_match('#^/siembra/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_siembra_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'siembra_update')), array (  '_controller' => 'Almacigos\\SiembraBundle\\Controller\\SiembraController::updateAction',));
            }
            not_siembra_update:

            // siembra_delete
            if (preg_match('#^/siembra/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_siembra_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'siembra_delete')), array (  '_controller' => 'Almacigos\\SiembraBundle\\Controller\\SiembraController::deleteAction',));
            }
            not_siembra_delete:

        }

        if (0 === strpos($pathinfo, '/c')) {
            if (0 === strpos($pathinfo, '/cliente')) {
                // cliente
                if (rtrim($pathinfo, '/') === '/cliente') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_cliente;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'cliente');
                    }

                    return array (  '_controller' => 'Almacigos\\VentaBundle\\Controller\\ClienteController::indexAction',  '_route' => 'cliente',);
                }
                not_cliente:

                // cliente_create
                if ($pathinfo === '/cliente/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_cliente_create;
                    }

                    return array (  '_controller' => 'Almacigos\\VentaBundle\\Controller\\ClienteController::createAction',  '_route' => 'cliente_create',);
                }
                not_cliente_create:

                // cliente_new
                if ($pathinfo === '/cliente/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_cliente_new;
                    }

                    return array (  '_controller' => 'Almacigos\\VentaBundle\\Controller\\ClienteController::newAction',  '_route' => 'cliente_new',);
                }
                not_cliente_new:

                // cliente_show
                if (preg_match('#^/cliente/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_cliente_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'cliente_show')), array (  '_controller' => 'Almacigos\\VentaBundle\\Controller\\ClienteController::showAction',));
                }
                not_cliente_show:

                // cliente_edit
                if (preg_match('#^/cliente/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_cliente_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'cliente_edit')), array (  '_controller' => 'Almacigos\\VentaBundle\\Controller\\ClienteController::editAction',));
                }
                not_cliente_edit:

                // cliente_update
                if (preg_match('#^/cliente/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_cliente_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'cliente_update')), array (  '_controller' => 'Almacigos\\VentaBundle\\Controller\\ClienteController::updateAction',));
                }
                not_cliente_update:

                // cliente_delete
                if (preg_match('#^/cliente/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_cliente_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'cliente_delete')), array (  '_controller' => 'Almacigos\\VentaBundle\\Controller\\ClienteController::deleteAction',));
                }
                not_cliente_delete:

            }

            if (0 === strpos($pathinfo, '/con')) {
                if (0 === strpos($pathinfo, '/condicionventa')) {
                    // condicionventa
                    if (rtrim($pathinfo, '/') === '/condicionventa') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_condicionventa;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'condicionventa');
                        }

                        return array (  '_controller' => 'Almacigos\\VentaBundle\\Controller\\CondicionVentaController::indexAction',  '_route' => 'condicionventa',);
                    }
                    not_condicionventa:

                    // condicionventa_create
                    if ($pathinfo === '/condicionventa/') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_condicionventa_create;
                        }

                        return array (  '_controller' => 'Almacigos\\VentaBundle\\Controller\\CondicionVentaController::createAction',  '_route' => 'condicionventa_create',);
                    }
                    not_condicionventa_create:

                    // condicionventa_new
                    if ($pathinfo === '/condicionventa/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_condicionventa_new;
                        }

                        return array (  '_controller' => 'Almacigos\\VentaBundle\\Controller\\CondicionVentaController::newAction',  '_route' => 'condicionventa_new',);
                    }
                    not_condicionventa_new:

                    // condicionventa_show
                    if (preg_match('#^/condicionventa/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_condicionventa_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'condicionventa_show')), array (  '_controller' => 'Almacigos\\VentaBundle\\Controller\\CondicionVentaController::showAction',));
                    }
                    not_condicionventa_show:

                    // condicionventa_edit
                    if (preg_match('#^/condicionventa/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_condicionventa_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'condicionventa_edit')), array (  '_controller' => 'Almacigos\\VentaBundle\\Controller\\CondicionVentaController::editAction',));
                    }
                    not_condicionventa_edit:

                    // condicionventa_update
                    if (preg_match('#^/condicionventa/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PUT') {
                            $allow[] = 'PUT';
                            goto not_condicionventa_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'condicionventa_update')), array (  '_controller' => 'Almacigos\\VentaBundle\\Controller\\CondicionVentaController::updateAction',));
                    }
                    not_condicionventa_update:

                    // condicionventa_delete
                    if (preg_match('#^/condicionventa/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_condicionventa_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'condicionventa_delete')), array (  '_controller' => 'Almacigos\\VentaBundle\\Controller\\CondicionVentaController::deleteAction',));
                    }
                    not_condicionventa_delete:

                }

                if (0 === strpos($pathinfo, '/contado')) {
                    // contado
                    if (rtrim($pathinfo, '/') === '/contado') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_contado;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'contado');
                        }

                        return array (  '_controller' => 'Almacigos\\VentaBundle\\Controller\\ContadoController::indexAction',  '_route' => 'contado',);
                    }
                    not_contado:

                    // contado_create
                    if ($pathinfo === '/contado/') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_contado_create;
                        }

                        return array (  '_controller' => 'Almacigos\\VentaBundle\\Controller\\ContadoController::createAction',  '_route' => 'contado_create',);
                    }
                    not_contado_create:

                    // contado_new
                    if ($pathinfo === '/contado/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_contado_new;
                        }

                        return array (  '_controller' => 'Almacigos\\VentaBundle\\Controller\\ContadoController::newAction',  '_route' => 'contado_new',);
                    }
                    not_contado_new:

                    // contado_show
                    if (preg_match('#^/contado/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_contado_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'contado_show')), array (  '_controller' => 'Almacigos\\VentaBundle\\Controller\\ContadoController::showAction',));
                    }
                    not_contado_show:

                    // contado_edit
                    if (preg_match('#^/contado/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_contado_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'contado_edit')), array (  '_controller' => 'Almacigos\\VentaBundle\\Controller\\ContadoController::editAction',));
                    }
                    not_contado_edit:

                    // contado_update
                    if (preg_match('#^/contado/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PUT') {
                            $allow[] = 'PUT';
                            goto not_contado_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'contado_update')), array (  '_controller' => 'Almacigos\\VentaBundle\\Controller\\ContadoController::updateAction',));
                    }
                    not_contado_update:

                    // contado_delete
                    if (preg_match('#^/contado/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_contado_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'contado_delete')), array (  '_controller' => 'Almacigos\\VentaBundle\\Controller\\ContadoController::deleteAction',));
                    }
                    not_contado_delete:

                }

            }

            if (0 === strpos($pathinfo, '/credito')) {
                // credito
                if (rtrim($pathinfo, '/') === '/credito') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_credito;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'credito');
                    }

                    return array (  '_controller' => 'Almacigos\\VentaBundle\\Controller\\CreditoController::indexAction',  '_route' => 'credito',);
                }
                not_credito:

                // credito_create
                if ($pathinfo === '/credito/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_credito_create;
                    }

                    return array (  '_controller' => 'Almacigos\\VentaBundle\\Controller\\CreditoController::createAction',  '_route' => 'credito_create',);
                }
                not_credito_create:

                // credito_new
                if ($pathinfo === '/credito/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_credito_new;
                    }

                    return array (  '_controller' => 'Almacigos\\VentaBundle\\Controller\\CreditoController::newAction',  '_route' => 'credito_new',);
                }
                not_credito_new:

                // credito_show
                if (preg_match('#^/credito/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_credito_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'credito_show')), array (  '_controller' => 'Almacigos\\VentaBundle\\Controller\\CreditoController::showAction',));
                }
                not_credito_show:

                // credito_edit
                if (preg_match('#^/credito/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_credito_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'credito_edit')), array (  '_controller' => 'Almacigos\\VentaBundle\\Controller\\CreditoController::editAction',));
                }
                not_credito_edit:

                // credito_update
                if (preg_match('#^/credito/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_credito_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'credito_update')), array (  '_controller' => 'Almacigos\\VentaBundle\\Controller\\CreditoController::updateAction',));
                }
                not_credito_update:

                // credito_delete
                if (preg_match('#^/credito/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_credito_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'credito_delete')), array (  '_controller' => 'Almacigos\\VentaBundle\\Controller\\CreditoController::deleteAction',));
                }
                not_credito_delete:

            }

        }

        if (0 === strpos($pathinfo, '/documentorespaldo')) {
            // documentorespaldo
            if (rtrim($pathinfo, '/') === '/documentorespaldo') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_documentorespaldo;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'documentorespaldo');
                }

                return array (  '_controller' => 'Almacigos\\VentaBundle\\Controller\\DocumentoRespaldoController::indexAction',  '_route' => 'documentorespaldo',);
            }
            not_documentorespaldo:

            // documentorespaldo_create
            if ($pathinfo === '/documentorespaldo/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_documentorespaldo_create;
                }

                return array (  '_controller' => 'Almacigos\\VentaBundle\\Controller\\DocumentoRespaldoController::createAction',  '_route' => 'documentorespaldo_create',);
            }
            not_documentorespaldo_create:

            // documentorespaldo_new
            if ($pathinfo === '/documentorespaldo/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_documentorespaldo_new;
                }

                return array (  '_controller' => 'Almacigos\\VentaBundle\\Controller\\DocumentoRespaldoController::newAction',  '_route' => 'documentorespaldo_new',);
            }
            not_documentorespaldo_new:

            // documentorespaldo_show
            if (preg_match('#^/documentorespaldo/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_documentorespaldo_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'documentorespaldo_show')), array (  '_controller' => 'Almacigos\\VentaBundle\\Controller\\DocumentoRespaldoController::showAction',));
            }
            not_documentorespaldo_show:

            // documentorespaldo_edit
            if (preg_match('#^/documentorespaldo/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_documentorespaldo_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'documentorespaldo_edit')), array (  '_controller' => 'Almacigos\\VentaBundle\\Controller\\DocumentoRespaldoController::editAction',));
            }
            not_documentorespaldo_edit:

            // documentorespaldo_update
            if (preg_match('#^/documentorespaldo/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_documentorespaldo_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'documentorespaldo_update')), array (  '_controller' => 'Almacigos\\VentaBundle\\Controller\\DocumentoRespaldoController::updateAction',));
            }
            not_documentorespaldo_update:

            // documentorespaldo_delete
            if (preg_match('#^/documentorespaldo/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_documentorespaldo_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'documentorespaldo_delete')), array (  '_controller' => 'Almacigos\\VentaBundle\\Controller\\DocumentoRespaldoController::deleteAction',));
            }
            not_documentorespaldo_delete:

        }

        // almacigos_venta_inicio_index
        if (rtrim($pathinfo, '/') === '/inicio') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'almacigos_venta_inicio_index');
            }

            return array (  '_controller' => 'Almacigos\\VentaBundle\\Controller\\InicioController::indexAction',  '_route' => 'almacigos_venta_inicio_index',);
        }

        if (0 === strpos($pathinfo, '/notaventa')) {
            // notaventa
            if (rtrim($pathinfo, '/') === '/notaventa') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_notaventa;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'notaventa');
                }

                return array (  '_controller' => 'Almacigos\\VentaBundle\\Controller\\NotaVentaController::indexAction',  '_route' => 'notaventa',);
            }
            not_notaventa:

            // notaventa_create
            if ($pathinfo === '/notaventa/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_notaventa_create;
                }

                return array (  '_controller' => 'Almacigos\\VentaBundle\\Controller\\NotaVentaController::createAction',  '_route' => 'notaventa_create',);
            }
            not_notaventa_create:

            // notaventa_new
            if ($pathinfo === '/notaventa/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_notaventa_new;
                }

                return array (  '_controller' => 'Almacigos\\VentaBundle\\Controller\\NotaVentaController::newAction',  '_route' => 'notaventa_new',);
            }
            not_notaventa_new:

            // notaventa_show
            if (preg_match('#^/notaventa/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_notaventa_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'notaventa_show')), array (  '_controller' => 'Almacigos\\VentaBundle\\Controller\\NotaVentaController::showAction',));
            }
            not_notaventa_show:

            // notaventa_edit
            if (preg_match('#^/notaventa/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_notaventa_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'notaventa_edit')), array (  '_controller' => 'Almacigos\\VentaBundle\\Controller\\NotaVentaController::editAction',));
            }
            not_notaventa_edit:

            // notaventa_update
            if (preg_match('#^/notaventa/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_notaventa_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'notaventa_update')), array (  '_controller' => 'Almacigos\\VentaBundle\\Controller\\NotaVentaController::updateAction',));
            }
            not_notaventa_update:

            // notaventa_delete
            if (preg_match('#^/notaventa/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_notaventa_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'notaventa_delete')), array (  '_controller' => 'Almacigos\\VentaBundle\\Controller\\NotaVentaController::deleteAction',));
            }
            not_notaventa_delete:

        }

        if (0 === strpos($pathinfo, '/p')) {
            if (0 === strpos($pathinfo, '/pedido')) {
                // pedido
                if (rtrim($pathinfo, '/') === '/pedido') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_pedido;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'pedido');
                    }

                    return array (  '_controller' => 'Almacigos\\VentaBundle\\Controller\\PedidoController::indexAction',  '_route' => 'pedido',);
                }
                not_pedido:

                // pedido_create
                if ($pathinfo === '/pedido/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_pedido_create;
                    }

                    return array (  '_controller' => 'Almacigos\\VentaBundle\\Controller\\PedidoController::createAction',  '_route' => 'pedido_create',);
                }
                not_pedido_create:

                // pedido_new
                if ($pathinfo === '/pedido/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_pedido_new;
                    }

                    return array (  '_controller' => 'Almacigos\\VentaBundle\\Controller\\PedidoController::newAction',  '_route' => 'pedido_new',);
                }
                not_pedido_new:

                if (0 === strpos($pathinfo, '/pedido/agregar')) {
                    // nv_new_pedido
                    if (preg_match('#^/pedido/agregar/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_nv_new_pedido;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'nv_new_pedido')), array (  '_controller' => 'Almacigos\\VentaBundle\\Controller\\PedidoController::agregarAction',));
                    }
                    not_nv_new_pedido:

                    // pedido_agregar
                    if ($pathinfo === '/pedido/agregar') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_pedido_agregar;
                        }

                        return array (  '_controller' => 'Almacigos\\VentaBundle\\Controller\\PedidoController::create2Action',  '_route' => 'pedido_agregar',);
                    }
                    not_pedido_agregar:

                }

                // pedido_show
                if (preg_match('#^/pedido/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_pedido_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pedido_show')), array (  '_controller' => 'Almacigos\\VentaBundle\\Controller\\PedidoController::showAction',));
                }
                not_pedido_show:

                // pedido_edit
                if (preg_match('#^/pedido/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_pedido_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pedido_edit')), array (  '_controller' => 'Almacigos\\VentaBundle\\Controller\\PedidoController::editAction',));
                }
                not_pedido_edit:

                // pedido_update
                if (preg_match('#^/pedido/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_pedido_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pedido_update')), array (  '_controller' => 'Almacigos\\VentaBundle\\Controller\\PedidoController::updateAction',));
                }
                not_pedido_update:

                // pedido_delete
                if (preg_match('#^/pedido/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_pedido_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pedido_delete')), array (  '_controller' => 'Almacigos\\VentaBundle\\Controller\\PedidoController::deleteAction',));
                }
                not_pedido_delete:

            }

            if (0 === strpos($pathinfo, '/producto')) {
                // producto
                if (rtrim($pathinfo, '/') === '/producto') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_producto;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'producto');
                    }

                    return array (  '_controller' => 'Almacigos\\VentaBundle\\Controller\\ProductoController::indexAction',  '_route' => 'producto',);
                }
                not_producto:

                // producto_create
                if ($pathinfo === '/producto/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_producto_create;
                    }

                    return array (  '_controller' => 'Almacigos\\VentaBundle\\Controller\\ProductoController::createAction',  '_route' => 'producto_create',);
                }
                not_producto_create:

                // producto_new
                if ($pathinfo === '/producto/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_producto_new;
                    }

                    return array (  '_controller' => 'Almacigos\\VentaBundle\\Controller\\ProductoController::newAction',  '_route' => 'producto_new',);
                }
                not_producto_new:

                // producto_show
                if (preg_match('#^/producto/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_producto_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'producto_show')), array (  '_controller' => 'Almacigos\\VentaBundle\\Controller\\ProductoController::showAction',));
                }
                not_producto_show:

                // producto_edit
                if (preg_match('#^/producto/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_producto_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'producto_edit')), array (  '_controller' => 'Almacigos\\VentaBundle\\Controller\\ProductoController::editAction',));
                }
                not_producto_edit:

                // producto_update
                if (preg_match('#^/producto/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_producto_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'producto_update')), array (  '_controller' => 'Almacigos\\VentaBundle\\Controller\\ProductoController::updateAction',));
                }
                not_producto_update:

                // producto_delete
                if (preg_match('#^/producto/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_producto_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'producto_delete')), array (  '_controller' => 'Almacigos\\VentaBundle\\Controller\\ProductoController::deleteAction',));
                }
                not_producto_delete:

            }

        }

        if (0 === strpos($pathinfo, '/semilla')) {
            // semilla
            if (rtrim($pathinfo, '/') === '/semilla') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_semilla;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'semilla');
                }

                return array (  '_controller' => 'Almacigos\\VentaBundle\\Controller\\SemillaController::indexAction',  '_route' => 'semilla',);
            }
            not_semilla:

            // semilla_create
            if ($pathinfo === '/semilla/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_semilla_create;
                }

                return array (  '_controller' => 'Almacigos\\VentaBundle\\Controller\\SemillaController::createAction',  '_route' => 'semilla_create',);
            }
            not_semilla_create:

            // semilla_new
            if ($pathinfo === '/semilla/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_semilla_new;
                }

                return array (  '_controller' => 'Almacigos\\VentaBundle\\Controller\\SemillaController::newAction',  '_route' => 'semilla_new',);
            }
            not_semilla_new:

            // semilla_show
            if (preg_match('#^/semilla/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_semilla_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'semilla_show')), array (  '_controller' => 'Almacigos\\VentaBundle\\Controller\\SemillaController::showAction',));
            }
            not_semilla_show:

            // semilla_edit
            if (preg_match('#^/semilla/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_semilla_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'semilla_edit')), array (  '_controller' => 'Almacigos\\VentaBundle\\Controller\\SemillaController::editAction',));
            }
            not_semilla_edit:

            // semilla_update
            if (preg_match('#^/semilla/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_semilla_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'semilla_update')), array (  '_controller' => 'Almacigos\\VentaBundle\\Controller\\SemillaController::updateAction',));
            }
            not_semilla_update:

            // semilla_delete
            if (preg_match('#^/semilla/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_semilla_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'semilla_delete')), array (  '_controller' => 'Almacigos\\VentaBundle\\Controller\\SemillaController::deleteAction',));
            }
            not_semilla_delete:

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
