<?php
$uri = service('uri')->getSegments();
$uri1 = $uri[1] ?? 'index';
$uri2 = $uri[2] ?? '';
$uri3 = $uri[3] ?? '';
?>

<div id="sidebar">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header position-relative">
            <div class="d-flex justify-content-between align-items-center">
                <div class="logo">
                    <a href="index.html"><img src="<?= base_url("/assets/compiled/svg/logo.svg"); ?>" alt="Logo" srcset=""></a>
                </div>
                <div class="theme-toggle d-flex gap-2 align-items-center mt-2">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink"
                  aria-hidden="true"
                  role="img"
                  class="iconify iconify--system-uicons"
                  width="20"
                  height="20"
                  preserveAspectRatio="xMidYMid meet"
                  viewBox="0 0 21 21"
                >
                  <g
                    fill="none"
                    fill-rule="evenodd"
                    stroke="currentColor"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  >
                    <path
                      d="M10.5 14.5c2.219 0 4-1.763 4-3.982a4.003 4.003 0 0 0-4-4.018c-2.219 0-4 1.781-4 4c0 2.219 1.781 4 4 4zM4.136 4.136L5.55 5.55m9.9 9.9l1.414 1.414M1.5 10.5h2m14 0h2M4.135 16.863L5.55 15.45m9.899-9.9l1.414-1.415M10.5 19.5v-2m0-14v-2"
                      opacity=".3"
                    ></path>
                    <g transform="translate(-210 -1)">
                      <path d="M220.5 2.5v2m6.5.5l-1.5 1.5"></path>
                      <circle cx="220.5" cy="11.5" r="4"></circle>
                      <path
                        d="m214 5l1.5 1.5m5 14v-2m6.5-.5l-1.5-1.5M214 18l1.5-1.5m-4-5h2m14 0h2"
                      ></path>
                    </g>
                  </g>
                </svg>
                <div class="form-check form-switch fs-6">
                  <input
                    class="form-check-input me-0"
                    type="checkbox"
                    id="toggle-dark"
                    style="cursor: pointer"
                  />
                  <label class="form-check-label"></label>
                </div>
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink"
                  aria-hidden="true"
                  role="img"
                  class="iconify iconify--mdi"
                  width="20"
                  height="20"
                  preserveAspectRatio="xMidYMid meet"
                  viewBox="0 0 24 24"
                >
                  <path
                    fill="currentColor"
                    d="m17.75 4.09l-2.53 1.94l.91 3.06l-2.63-1.81l-2.63 1.81l.91-3.06l-2.53-1.94L12.44 4l1.06-3l1.06 3l3.19.09m3.5 6.91l-1.64 1.25l.59 1.98l-1.7-1.17l-1.7 1.17l.59-1.98L15.75 11l2.06-.05L18.5 9l.69 1.95l2.06.05m-2.28 4.95c.83-.08 1.72 1.1 1.19 1.85c-.32.45-.66.87-1.08 1.27C15.17 23 8.84 23 4.94 19.07c-3.91-3.9-3.91-10.24 0-14.14c.4-.4.82-.76 1.27-1.08c.75-.53 1.93.36 1.85 1.19c-.27 2.86.69 5.83 2.89 8.02a9.96 9.96 0 0 0 8.02 2.89m-1.64 2.02a12.08 12.08 0 0 1-7.8-3.47c-2.17-2.19-3.33-5-3.49-7.82c-2.81 3.14-2.7 7.96.31 10.98c3.02 3.01 7.84 3.12 10.98.31Z"
                  ></path>
                </svg>
              </div>
              <div class="sidebar-toggler x">
                <a href="#" class="sidebar-hide d-xl-none d-block"
                  ><i class="bi bi-x bi-middle"></i
                ></a>
              </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Menu</li>

                <li class="sidebar-item <?= ($uri1 == 'index') ? 'active' : '' ?> ">
                    <a href="/mazer" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="sidebar-item <?= ($uri1 == 'components') ? 'active' : '' ?> has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-stack"></i>
                        <span>Components</span>
                    </a>
                    <ul class="submenu <?= ($uri1 == 'components') ? 'active' : '' ?>">
                        <li class="submenu-item <?= ($uri2 == 'accordion') ? 'active' : '' ?>">
                            <a href="/mazer/components/accordion">Accordion</a>
                        </li>
                        <li class="submenu-item <?= ($uri2 == 'alert') ? 'active' : '' ?>">
                            <a href="/mazer/components/alert">Alert</a>
                        </li>
                        <li class="submenu-item <?= ($uri2 == 'badge') ? 'active' : '' ?>">
                            <a href="/mazer/components/badge">Badge</a>
                        </li>
                        <li class="submenu-item <?= ($uri2 == 'breadcrumb') ? 'active' : '' ?>">
                            <a href="/mazer/components/breadcrumb">Breadcrumb</a>
                        </li>
                        <li class="submenu-item <?= ($uri2 == 'button') ? 'active' : '' ?>">
                            <a href="/mazer/components/button">Button</a>
                        </li>
                        <li class="submenu-item <?= ($uri2 == 'card') ? 'active' : '' ?>">
                            <a href="/mazer/components/card">Card</a>
                        </li>
                        <li class="submenu-item <?= ($uri2 == 'carousel') ? 'active' : '' ?>">
                            <a href="/mazer/components/carousel">Carousel</a>
                        </li>
                        <li class="submenu-item <?= ($uri2 == 'collapse') ? 'active' : '' ?>">
                            <a href="/mazer/components/collapse">Collapse</a>
                        </li>
                        <li class="submenu-item <?= ($uri2 == 'dropdown') ? 'active' : '' ?>">
                            <a href="/mazer/components/dropdown">Dropdown</a>
                        </li>
                        <li class="submenu-item <?= ($uri2 == 'list-group') ? 'active' : '' ?>">
                            <a href="/mazer/components/list-group">List Group</a>
                        </li>
                        <li class="submenu-item <?= ($uri2 == 'modal') ? 'active' : '' ?>">
                            <a href="/mazer/components/modal">Modal</a>
                        </li>
                        <li class="submenu-item <?= ($uri2 == 'navs') ? 'active' : '' ?>">
                            <a href="/mazer/components/navs">Navs</a>
                        </li>
                        <li class="submenu-item <?= ($uri2 == 'pagination') ? 'active' : '' ?>">
                            <a href="/mazer/components/pagination">Pagination</a>
                        </li>
                        <li class="submenu-item <?= ($uri2 == 'progress') ? 'active' : '' ?>">
                            <a href="/mazer/components/progress">Progress</a>
                        </li>
                        <li class="submenu-item <?= ($uri2 == 'spinner') ? 'active' : '' ?>">
                            <a href="/mazer/components/spinner">Spinner</a>
                        </li>
                        <li class="submenu-item <?= ($uri2 == 'toasts') ? 'active' : '' ?>">
                            <a href="/mazer/components/toasts">Toasts</a>
                        </li>
                        <li class="submenu-item <?= ($uri2 == 'tooltip') ? 'active' : '' ?>">
                            <a href="/mazer/components/tooltip">Tooltip</a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-item <?= ($uri1 == 'extra') ? 'active' : '' ?> has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-collection-fill"></i>
                        <span>Extra Components</span>
                    </a>
                    <ul class="submenu <?= ($uri1 == 'extra') ? 'active' : '' ?>">
                        <li class="submenu-item <?= ($uri3 == 'avatar') ? 'active' : '' ?>">
                            <a href="/mazer/extra/components/avatar">Avatar</a>
                        </li>
                        <li class="submenu-item <?= ($uri3 == 'divider') ? 'active' : '' ?>">
                            <a href="/mazer/extra/components/divider">Divider</a>
                        </li>
                        <li class="submenu-item <?= ($uri3 == 'date-picker') ? 'active' : '' ?>">
                            <a href="/mazer/extra/components/date-picker">Date Picker</a>
                        </li>
                        <li class="submenu-item <?= ($uri3 == 'sweet-alert') ? 'active' : '' ?>">
                            <a href="/mazer/extra/components/sweet-alert">Sweet Alert</a>
                        </li>
                        <li class="submenu-item <?= ($uri3 == 'toastify') ? 'active' : '' ?>">
                            <a href="/mazer/extra/components/toastify">Toastify</a>
                        </li>
                        <li class="submenu-item <?= ($uri3 == 'rating') ? 'active' : '' ?>">
                            <a href="/mazer/extra/components/rating">Rating</a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-item <?= ($uri1 == 'layouts') ? 'active' : '' ?> has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-grid-1x2-fill"></i>
                        <span>Layouts</span>
                    </a>
                    <ul class="submenu <?= ($uri1 == 'layouts') ? 'active' : '' ?>">
                        <li class="submenu-item <?= ($uri2 == 'default') ? 'active' : '' ?>">
                            <a href="/mazer/layouts/default">Default Layout</a>
                        </li>
                        <li class="submenu-item <?= ($uri2 == '1-column') ? 'active' : '' ?>">
                            <a href="/mazer/layouts/1-column">1 Column</a>
                        </li>
                        <li class="submenu-item <?= ($uri2 == 'vertical-navbar') ? 'active' : '' ?>">
                            <a href="/mazer/layouts/vertical-navbar">Vertical Navbar</a>
                        </li>
                        <li class="submenu-item <?= ($uri2 == 'layout-rtl') ? 'active' : '' ?>">
                            <a href="/mazer/layouts/layout-rtl">RTL Layout</a>
                        </li>
                        <li class="submenu-item <?= ($uri2 == 'horizontal') ? 'active' : '' ?>">
                            <a href="/mazer/layouts/horizontal">Horizontal Menu</a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-title">Forms &amp; Tables</li>

                <li class="sidebar-item <?= ($uri1 == 'forms' && $uri2 != 'layout' && $uri2 != 'editor') ? 'active' : '' ?> has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-hexagon-fill"></i>
                        <span>Form Elements</span>
                    </a>
                    <ul class="submenu <?= ($uri1 == 'forms' && $uri2 != 'layout') ? 'active' : '' ?>">
                        <li class="submenu-item <?= ($uri2 == 'input') ? 'active' : '' ?>">
                            <a href="/mazer/forms/input">Input</a>
                        </li>
                        <li class="submenu-item <?= ($uri2 == 'input-group') ? 'active' : '' ?>">
                            <a href="/mazer/forms/input-group">Input Group</a>
                        </li>
                        <li class="submenu-item <?= ($uri2 == 'select') ? 'active' : '' ?>">
                            <a href="/mazer/forms/select">Select</a>
                        </li>
                        <li class="submenu-item <?= ($uri2 == 'radio') ? 'active' : '' ?>">
                            <a href="/mazer/forms/radio">Radio</a>
                        </li>
                        <li class="submenu-item <?= ($uri2 == 'checkbox') ? 'active' : '' ?>">
                            <a href="/mazer/forms/checkbox">Checkbox</a>
                        </li>
                        <li class="submenu-item <?= ($uri2 == 'textarea') ? 'active' : '' ?>">
                            <a href="/mazer/forms/textarea">Textarea</a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-item <?= ($uri2 == 'layout') ? 'active' : '' ?>">
                    <a href="/mazer/forms/layout" class='sidebar-link'>
                        <i class="bi bi-file-earmark-medical-fill"></i>
                        <span>Form Layout</span>
                    </a>
                </li>

                <li class="sidebar-item <?= ($uri1 == 'forms' && $uri2 == 'validation') ? 'active' : '' ?> has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-journal-check"></i>
                        <span>Form Validation</span>
                    </a>
                    <ul class="submenu <?= ($uri1 == 'forms' && $uri2 == 'validation') ? 'active' : '' ?>">
                        <li class="submenu-item <?= ($uri3 == 'parsley') ? 'active' : '' ?>">
                            <a href="/mazer/forms/validation/parsley">Parsley</a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-item <?= ($uri1 == 'forms' && $uri2 == 'editor') ? 'active' : '' ?> has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-pen-fill"></i>
                        <span>Form Editor</span>
                    </a>
                    <ul class="submenu <?= ($uri1 == 'forms' && $uri2 == 'editor') ? 'active' : '' ?>">
                        <li class="submenu-item <?= ($uri3 == 'quill') ? 'active' : '' ?>">
                            <a href="/mazer/forms/editor/quill">Quill</a>
                        </li>
                        <li class="submenu-item <?= ($uri3 == 'ckeditor') ? 'active' : '' ?>">
                            <a href="/mazer/forms/editor/ckeditor">CKEditor</a>
                        </li>
                        <li class="submenu-item <?= ($uri3 == 'summernote') ? 'active' : '' ?>">
                            <a href="/mazer/forms/editor/summernote">Summernote</a>
                        </li>
                        <li class="submenu-item <?= ($uri3 == 'tinymce') ? 'active' : '' ?>">
                            <a href="/mazer/forms/editor/tinymce">TinyMCE</a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-item <?= ($uri1 == 'table') ? 'active' : '' ?>">
                    <a href="/mazer/table" class='sidebar-link'>
                        <i class="bi bi-grid-1x2-fill"></i>
                        <span>Table</span>
                    </a>
                </li>

                <li class="sidebar-item <?= ($uri1 == 'datatable') ? 'active' : '' ?> has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                        <span>Datatables</span>
                    </a>
                    <ul class="submenu <?= ($uri1 == 'datatable') ? 'active' : '' ?>">
                        <li class="submenu-item <?= ($uri2 == 'table') ? 'active' : '' ?>">
                            <a href="/mazer/datatable/table">Datatable</a>
                        </li>
                        <li class="submenu-item <?= ($uri2 == 'jquery') ? 'active' : '' ?>">
                            <a href="/mazer/datatable/jquery">Datatable (jQuery)</a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-title">Extra UI</li>

                <li class="sidebar-item <?= ($uri2 == 'widgets') ? 'active' : '' ?> has-sub">
                    <a href="#" class='sidebar-link <?= ($uri2 == 'widgets') ? 'active' : '' ?>'>
                        <i class="bi bi-pentagon-fill"></i>
                        <span>Widgets</span>
                    </a>
                    <ul class="submenu <?= ($uri2 == 'widgets') ? 'active' : '' ?>">
                        <li class="submenu-item <?= ($uri3 == 'chatbox') ? 'active' : '' ?>">
                            <a href="/mazer/ui/widgets/chatbox">Chatbox</a>
                        </li>
                        <li class="submenu-item <?= ($uri3 == 'pricing') ? 'active' : '' ?>">
                            <a href="/mazer/ui/widgets/pricing">Pricing</a>
                        </li>
                        <li class="submenu-item <?= ($uri3 == 'to-do-list') ? 'active' : '' ?>">
                            <a href="/mazer/ui/widgets/to-do-list">To-do List</a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-item <?= ($uri2 == 'icons') ? 'active' : '' ?> has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-egg-fill"></i>
                        <span>Icons</span>
                    </a>
                    <ul class="submenu <?= ($uri2 == 'icons') ? 'active' : '' ?>">
                        <li class="submenu-item <?= ($uri3 == 'bootstrap-icons') ? 'active' : '' ?>">
                            <a href="/mazer/ui/icons/bootstrap-icons">Bootstrap Icons </a>
                        </li>
                        <li class="submenu-item <?= ($uri3 == 'fontawesome') ? 'active' : '' ?>">
                            <a href="/mazer/ui/icons/fontawesome">Fontawesome</a>
                        </li>
                        <li class="submenu-item <?= ($uri3 == 'dripicons') ? 'active' : '' ?>">
                            <a href="/mazer/ui/icons/dripicons">Dripicons</a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-item <?= ($uri2 == 'charts') ? 'active' : '' ?> has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-bar-chart-fill"></i>
                        <span>Charts</span>
                    </a>
                    <ul class="submenu <?= ($uri3 == 'chartjs') ? 'active' : '' ?>">
                        <li class="submenu-item ">
                            <a href="/mazer/ui/charts/chartjs">ChartJS</a>
                        </li>
                        <li class="submenu-item <?= ($uri3 == 'apexcharts') ? 'active' : '' ?>">
                            <a href="/mazer/ui/charts/apexcharts">Apexcharts</a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-item <?= ($uri2 == 'file-uploader') ? 'active' : '' ?>">
                    <a href="/mazer/ui/file-uploader" class='sidebar-link'>
                        <i class="bi bi-cloud-arrow-up-fill"></i>
                        <span>File Uploader</span>
                    </a>
                </li>

                <li class="sidebar-item <?= ($uri2 == 'maps') ? 'active' : '' ?> has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-map-fill"></i>
                        <span>Maps</span>
                    </a>
                    <ul class="submenu <?= ($uri2 == 'maps') ? 'active' : '' ?>">
                        <li class="submenu-item <?= ($uri3 == 'google-map') ? 'active' : '' ?>">
                            <a href="/mazer/ui/maps/google-map">Google Map</a>
                        </li>
                        <li class="submenu-item <?= ($uri3 == 'jsvector-map') ? 'active' : '' ?>">
                            <a href="/mazer/ui/maps/jsvector-map">JS Vector Map</a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-item <?= ($uri1 == 'multi-level-menu') ? 'active' : '' ?> has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-three-dots"></i>
                        <span>Multi-level Menu</span>
                    </a>
                    <ul class="submenu <?= ($uri1 == 'multi-level-menu') ? 'active' : '' ?>">
                        <li class="submenu-item <?= ($uri3 == 'google-map') ? 'active' : '' ?> has-sub">
                            <a href="#" class="submenu-link">First Level</a>
                            
                            <ul class="submenu submenu-level-2<?= ($uri2 == 'maps') ? 'active' : '' ?>">
                                <li class="submenu-item <?= ($uri3 == 'jsvector-map') ? 'active' : '' ?>">
                                    <a href="/mazer/multi-level-menu/second-level" class="submenu-link">Second Level</a>
                                </li>
                                <li class="submenu-item">
                                    <a href="#" class="submenu-link">Second Level Menu</a>
                                 </li>
                            </ul>>
                        </li>
                        <li class="submenu-item has-sub">
                            <a href="#" class="submenu-link">Another Menu</a>

                            <ul class="submenu submenu-level-2">
                                <li class="submenu-item">
                                    <a href="#" class="submenu-link">Second Level Menu</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-title">Pages</li>

                <li class="sidebar-item <?= ($uri2 == 'email') ? 'active' : '' ?> ">
                    <a href="/mazer/applications/email" class='sidebar-link'>
                        <i class="bi bi-envelope-fill"></i>
                        <span>Email Application</span>
                    </a>
                </li>

                <li class="sidebar-item <?= ($uri2 == 'chat') ? 'active' : '' ?> ">
                    <a href="/mazer/applications/chat" class='sidebar-link'>
                        <i class="bi bi-chat-dots-fill"></i>
                        <span>Chat Application</span>
                    </a>
                </li>

                <li class="sidebar-item <?= ($uri2 == 'gallery') ? 'active' : '' ?> ">
                    <a href="/mazer/applications/gallery" class='sidebar-link'>
                        <i class="bi bi-image-fill"></i>
                        <span>Photo Gallery</span>
                    </a>
                </li>

                <li class="sidebar-item <?= ($uri2 == 'checkout') ? 'active' : '' ?> ">
                    <a href="/mazer/applications/checkout" class='sidebar-link'>
                        <i class="bi bi-basket-fill"></i>
                        <span>Checkout Page</span>
                    </a>
                </li>

                <li class="sidebar-item <?= ($uri2 == 'auth') ? 'active' : '' ?> has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-person-badge-fill"></i>
                        <span>Authentication</span>
                    </a>
                    <ul class="submenu <?= ($uri2 == 'auth') ? 'active' : '' ?>">
                        <li class="submenu-item <?= ($uri3 == 'login') ? 'active' : '' ?>">
                            <a href="/mazer/applications/auth/login">Login</a>
                        </li>
                        <li class="submenu-item <?= ($uri3 == 'register') ? 'active' : '' ?>">
                            <a href="/mazer/applications/auth/register">Register</a>
                        </li>
                        <li class="submenu-item <?= ($uri3 == 'forgot-password') ? 'active' : '' ?>">
                            <a href="/mazer/applications/auth/forgot-password">Forgot Password</a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-item <?= ($uri2 == 'errors') ? 'active' : '' ?> has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-x-octagon-fill"></i>
                        <span>Errors</span>
                    </a>
                    <ul class="submenu ">
                        <li class="submenu-item <?= ($uri3 == '403') ? 'active' : '' ?>">
                            <a href="/mazer/applications/errors/403">403</a>
                        </li>
                        <li class="submenu-item <?= ($uri3 == '404') ? 'active' : '' ?>">
                            <a href="/mazer/applications/errors/404">404</a>
                        </li>
                        <li class="submenu-item <?= ($uri3 == '500') ? 'active' : '' ?>">
                            <a href="/mazer/applications/errors/500">500</a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-title">Raise Support</li>

                <li class="sidebar-item  ">
                    <a href="https://zuramai.github.io/mazer/docs" class='sidebar-link'>
                        <i class="bi bi-life-preserver"></i>
                        <span>Documentation</span>
                    </a>
                </li>

                <li class="sidebar-item  ">
                    <a href="https://github.com/zuramai/mazer/blob/main/CONTRIBUTING.md" class='sidebar-link'>
                        <i class="bi bi-puzzle"></i>
                        <span>Contribute</span>
                    </a>
                </li>

                <li class="sidebar-item  ">
                    <a href="https://github.com/zuramai/mazer#donate" class='sidebar-link'>
                        <i class="bi bi-cash"></i>
                        <span>Donate</span>
                    </a>
                </li>

            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>
