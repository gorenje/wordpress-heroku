  <section id="postmeta">
    <p>Changed by <? the_author(); ?> on <? the_date(); ?></p>
  </section>
  <footer id="footer">
    <!-- div class="inner">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
      <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
      <a href="<?php echo wp_logout_url( $redirect ); ?>" rel="logout">Logout</a>
    </div -->
    <style>
      #footer {
        overflow: scroll;
      }
      #footer ul {
        margin-top: 0;
        margin-bottom: 2rem;
      }
      #footer ul.nav-menu {
        margin-top: 2rem;
      }
      .nav-menu li a {
        padding: .2rem 0 .2rem 1.5rem;
        color: #666;
      }
      .nav-menu li:hover a {
        color: #ccc;
      }
      .nav-menu > li > a {
        font-weight: bold;
        text-transform: uppercase;
        letter-spacing: 1px;
        color: #999;
      }
      .nav-menu li li a {
        font-weight: normal;
      }
    </style>
    <div class="inner">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
      <!-- ul class="nav-menu">
        <li><a href="#">About</a>
        <ul>
        <li><a href="#">Auditorium</a></li>
        <li><a href="#">History</a></li>
        <li><a href="#">KPI Definitions</a></li>
        <li><a href="#">Our Development Approach</a></li>
        <li><a href="#">Product Review Meetings</a></li>
        <li><a href="#">Studios &amp; Portfolios</a></li>
        <li><a href="#">Wooga Branding</a></li>
        </ul></li>
      <li><a href="#">Events</a>
      <ul>
      <li><a href="#">5 Minutes of Fame</a></li>
      <li><a href="#">Brownbags</a></li>
      <li><a href="#">Event Calendar</a></li>
      <li><a href="#">Plan an Event</a></li>
      <li><a href="#">Weekly Meetings</a></li>
      <li><a href="#">Internal Training</a></li>
      <li><a href="#">Speak at Conferences</a></li>
      </ul></li>
      <li><a href="#">Newbies</a>
      <ul>
      <li><a href="#">Business Cards</a></li>
      <li><a href="#">Emergencies</a></li>
      <li><a href="#">First steps - Paperwork</a></li>
      <li><a href="#">Industry References</a></li>
      <li><a href="#">Information Sharing @ Wooga</a></li>
      <li><a href="#">Our Support Team</a></li>
      <li><a href="#">Setting Up Your Workplace</a></li>
      <li><a href="#">Starter Sessions</a></li>
      <li><a href="#">Wooga Books &amp; Office Supplies</a></li>
      </ul></li>
      <li><a href="#">Connecting</a>
      <ul>
      <li><a href="#">Activities &amp; Facebook Groups</a></li>
      <li><a href="#">people.wooga.com</a></li>
      <li><a href="#">Seating Plan</a></li>
      <li><a href="#">Socializing @ Wooga</a></li>
      <li><a href="#">Wooga Buddy Program</a></li>
      </ul></li>
      <li><a href="#">Human Relations</a>
      <ul>
      <li><a href="#">Educational Budget</a></li>
      <li><a href="#">Employee Assistance</a></li>
      <li><a href="#">Families @ Wooga</a></li>
      <li><a href="#">Feedback process</a></li>
      <li><a href="#">Holidays / Sick Leave</a></li>
      <li><a href="#">Internal Applications</a></li>
      <li><a href="#">Language Classes</a></li>
      <li><a href="#">Leaving Wooga</a></li>
      <li><a href="#">Payroll and tax</a></li>
      <li><a href="#">Refer a friend</a></li>
      <li><a href="#">University Relations</a></li>
      <li><a href="#">Visa Renewal</a></li>
      <li><a href="#">Your HR Manager</a></li>
      </ul></li>
      <li><a href="#">Team Leads</a>
      <ul>
      <li><a href="#">Basics and legal information</a></li>
      <li><a href="#">Creating new positions</a></li>
      <li><a href="#">Feedback and Performance Management</a></li>
      <li><a href="#">Internal transfers</a></li>
      <li><a href="#">Introduction</a></li>
      <li><a href="#">Offboarding</a></li>
      <li><a href="#">Onboarding</a></li>
      <li><a href="#">Probation period</a></li>
      </ul></li>
      <li><a href="#">Engineering</a>
      <ul>
      <li><a href="#">Analytics Tools</a></li>
      <li><a href="#">Failure Handling</a></li>
      <li><a href="#">How we work</a></li>
      <li><a href="#">Reporting / Tracking</a></li>
      <li><a href="#">Tech within Games</a></li>
      </ul></li>
      <li><a href="#">Berlin</a>
      <ul>
      <li><a href="#">Accommodation</a></li>
      <li><a href="#">Becoming a Berliner</a></li>
      <li><a href="#">Doctors &amp; Meds</a></li>
      <li><a href="#">Getting Around Town</li>
      </ul></li>
      </ul -->
    </div>
  </footer>
  <script src="http://code.jquery.com/jquery-2.0.3.min.js" type="text/javascript" charset="utf-8"></script>
  <script src="<?php echo get_bloginfo( 'template_directory' ) ?>/js/jquery.details.min.js" type="text/javascript" charset="utf-8"></script>
  <script type="text/javascript" charset="utf-8">
    jQuery(function(){
      jQuery('details').details();
    })
  </script>
</body>
</html>