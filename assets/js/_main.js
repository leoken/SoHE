/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can 
 * always reference jQuery with $, even when in .noConflict() mode.
 *
 * Google CDN, Latest jQuery
 * To use the default WordPress version of jQuery, go to lib/config.php and
 * remove or comment out: add_theme_support('jquery-cdn');
 * ======================================================================== */

(function($) {

// Use this variable to set up the common and page specific functions. If you 
// rename this variable, you will also need to rename the namespace below.
var Roots = {
  // All pages
  common: {
    init: function() {
      // JavaScript to be fired on all pages

      $.stellar({
        horizontalOffset: 0,
        verticalOffset: 0,
        scrollProperty: 'scroll',
        positionProperty: 'position'
      });

      $('#menu-directory-filter a').click(function (e) {
        e.preventDefault();
        $(this).tab('show');
      });
      $('#events-tabs a').click(function (e) {
        e.preventDefault();
        $(this).tab('show');
      });
      $('.nav-tabs a:first').tab('show');
      $('.nav-pills a:first').tab('show');
      $('.entry-content').collapse();

      $('li.all').find('a').each(function () {
       $(this).attr('href', '#all');
       $(this).attr('data-target', '#all');
       $(this).attr('data-toggle', 'tab');
      });
      $('li.thismonth').find('a').each(function () {
       $(this).attr('href', '#thismonth');
       $(this).attr('data-target', '#thismonth');
       $(this).attr('data-toggle', 'tab');
      });
      $('li.nextmonth').find('a').each(function () {
       $(this).attr('href', '#nextmonth');
       $(this).attr('data-target', '#nextmonth');
       $(this).attr('data-toggle', 'tab');
      });
      $('li.twomonthsahead').find('a').each(function () {
       $(this).attr('href', '#twomonthsahead');
       $(this).attr('data-target', '#twomonthsahead');
       $(this).attr('data-toggle', 'tab');
      });
      $('li.threemonthsahead').find('a').each(function () {
       $(this).attr('href', '#threemonthsahead');
       $(this).attr('data-target', '#threemonthsahead');
       $(this).attr('data-toggle', 'tab');
      });
      $('li.lookingahead').find('a').each(function () {
       $(this).attr('href', '#lookingahead');
       $(this).attr('data-target', '#lookingahead');
       $(this).attr('data-toggle', 'tab');
      });
      $('li.menu-all').find('a').each(function () {
       $(this).attr('href', '#all');
       $(this).attr('data-target', '#all');
       $(this).attr('data-toggle', 'tab');
      });
      $('li.menu-staff').find('a').each(function () {
       $(this).attr('href', '#staff');
       $(this).attr('data-target', '#staff');
       $(this).attr('data-toggle', 'tab');
      });
      $('li.menu-faculty').find('a').each(function () {
       $(this).attr('href', '#faculty');
       $(this).attr('data-target', '#faculty');
       $(this).attr('data-toggle', 'tab');
      });
      $('li.menu-consumer-science').find('a').each(function () {
       $(this).attr('href', '#consumer-science');
       $(this).attr('data-target', '#consumer-science');
       $(this).attr('data-toggle', 'tab');
      });
      $('li.menu-design-studies').find('a').each(function () {
       $(this).attr('href', '#design-studies');
       $(this).attr('data-target', '#design-studies');
       $(this).attr('data-toggle', 'tab');
      });
      $('li.menu-human-development-family-studies').find('a').each(function () {
       $(this).attr('href', '#human-development-family-studies');
       $(this).attr('data-target', '#human-development-family-studies');
       $(this).attr('data-toggle', 'tab');
      });
      $('li.menu-interdisciplinary-studies').find('a').each(function () {
       $(this).attr('href', '#interdisciplinary-studies');
       $(this).attr('data-target', '#interdisciplinary-studies');
       $(this).attr('data-toggle', 'tab');
      });
      $('li.menu-interdisciplinary-studies').find('a').each(function () {
       $(this).attr('href', '#interdisciplinary-studies');
       $(this).attr('data-target', '#interdisciplinary-studies');
       $(this).attr('data-toggle', 'tab');
      });

      $('.parent-307 ul.children').each(function () {
       $(this).attr('id', 'child-menu-307');
      });

      $('.plus-button').click(function (e) {
        e.preventDefault();
        $(this).collapse('toggle');
      });

        }
      },
  // Home page
  home: {
    init: function() {
      // JavaScript to be fired on the home page
    }
  },
  // About us page, note the change from about-us to about_us.
  about_us: {
    init: function() {
      // JavaScript to be fired on the about us page
    }
  }
};

// The routing fires all common scripts, followed by the page specific scripts.
// Add additional events for more control over timing e.g. a finalize event
var UTIL = {
  fire: function(func, funcname, args) {
    var namespace = Roots;
    funcname = (funcname === undefined) ? 'init' : funcname;
    if (func !== '' && namespace[func] && typeof namespace[func][funcname] === 'function') {
      namespace[func][funcname](args);
    }
  },
  loadEvents: function() {
    UTIL.fire('common');

    $.each(document.body.className.replace(/-/g, '_').split(/\s+/),function(i,classnm) {
      UTIL.fire(classnm);
    });
  }
};

$(document).ready(UTIL.loadEvents);

})(jQuery); // Fully reference jQuery after this point.
