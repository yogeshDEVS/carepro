<div class="event-hub-page" id="event-hub-page">
    <div class="event-hub-page-header">
        <div class="row">
            <div class="col">
                <h1><?php echo get_admin_page_title(); ?></h1>
            </div>
            <div class="col-auto">
                <button type="button" id="refreshbtn" class="btn btn-sm btn-outline-light">
                    <span><i class="fa-solid fa-refresh"></i>
                </button>
            </div>
        </div>
    </div>
    <div class="event-hub-page-body">
        <div class="row g-0">
            <div class="col-2">
                <ul class="list-unstyled" id="eventTab">
                    <li>
                        <button id="link-collapse" class="btn btn-toggle d-inline-flex w-100 align-items-center border-0 link-collapse" data-target="#dashboard-tab-pane">
                            Dashboard
                        </button>
                    </li>
                    <li>
                        <button class="btn btn-toggle d-inline-flex w-100 align-items-center border-0" data-bs-toggle="collapse" data-bs-target="#registraion-collapse" aria-expanded="true">
                            Registration
                        </button>
                        <div class="collapse collapse-container show" id="registraion-collapse">
                            <ul class="nav flex-column" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a id="link-collapse" class="link-collapse nav-link active" data-target="#registered-items-tab-pane">
                                        Registered
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a id="link-collapse" class="link-collapse nav-link" data-target="#admission-items-tab-pane">
                                        Admission Items
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a id="link-collapse" class="link-collapse nav-link " data-target="#registration-ticket-tab-pane">
                                        Tickets
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a id="link-collapse" class="link-collapse nav-link" data-target="#registration-type-tab-pane">
                                        Registration Types
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a id="link-collapse" class="link-collapse nav-link " data-target="#pricing-tab-pane">
                                        Pricing
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <button class="btn btn-toggle d-inline-flex w-100 align-items-center border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#poster-collapse" aria-expanded="true">
                            Poster
                        </button>
                        <div class="collapse collapse-container" id="poster-collapse">
                            <ul class="nav flex-column" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a id="link-collapse" class="link-collapse nav-link " data-target="#poster-submission-tab-pane">
                                        Poster Submission
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a id="link-collapse" class="link-collapse nav-link " data-target="#poster-items-tab-pane">
                                        Poster Items
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a id="link-collapse" class="link-collapse nav-link " data-target="#poster-types-tab-pane">
                                        Poster Types
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <button class="btn btn-toggle d-inline-flex w-100 align-items-center border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#sponsor-collapse" aria-expanded="true">
                            Sponsor
                        </button>
                        <div class="collapse collapse-container" id="sponsor-collapse">
                            <ul class="nav flex-column" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a id="link-collapse" class="link-collapse nav-link" data-target="#sponsor-list-tab-pane">
                                        Sponsor List
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a id="link-collapse" class="link-collapse nav-link" data-target="#sponsor-options-tab-pane">
                                        Sponsor Options
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a id="link-collapse" class="link-collapse nav-link " data-target="#sponsor-types-tab-pane">
                                        Sponsor Types
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <button class="btn btn-toggle d-inline-flex w-100 align-items-center border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#emails-collapse" aria-expanded="true">
                            Email
                        </button>
                        <div class="collapse collapse-container" id="emails-collapse">
                            <ul class="nav flex-column" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a id="link-collapse" class="link-collapse nav-link" data-target="#emails-invitation-tab-pane">
                                    Invitation
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a id="link-collapse" class="link-collapse nav-link" data-target="#email-mailing-tab-pane">
                                    E-Mailing
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a id="link-collapse" class="link-collapse nav-link" data-target="#email-template-tab-pane">
                                    Template
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <button class="btn btn-toggle d-inline-flex w-100 align-items-center border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#reports-collapse" aria-expanded="true">
                            Reports
                        </button>
                        <div class="collapse collapse-container " id="reports-collapse">
                            <ul class="nav flex-column" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a id="link-collapse" class="link-collapse nav-link" data-target="#reports-tab-pane">
                                    Reports
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <button class="btn btn-toggle d-inline-flex w-100 align-items-center border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#settings-collapse" aria-expanded="true">
                            Settings
                        </button>
                        <div class="collapse collapse-container " id="settings-collapse">
                            <ul class="nav flex-column" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a id="link-collapse" class="link-collapse nav-link" data-target="#options-tab-pane">
                                        Options
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    
                </ul>
            </div>
            <div class="col-10">
                <div class="tab-content p-3" id="eventTabContent">
                    <!-- DASHBOARD -->
                    <?php get_template_part( 'template/admin/event-dashboard' ); ?>
                    <!-- REGISTERED -->
                    <?php get_template_part( 'template/admin/event-registered' ); ?>
                    <!-- ADMISSION ITEMS -->
                    <?php get_template_part( 'template/admin/event-admissionitems' ); ?>
                    <!-- REGISTRATION TICKET -->
                    <?php get_template_part( 'template/admin/event-registrationticket' ); ?>
                    <!-- REGISTRATION TYPE -->
                    <?php get_template_part( 'template/admin/event-registrationtype' ); ?>
                    <!-- PRICING TAB -->
                    <?php get_template_part( 'template/admin/event-pricing' ); ?>
                    <!-- POSTER SUBMISSION -->
                    <?php get_template_part( 'template/admin/event-postersubmission' ); ?>
                    <!-- POSTER ITEMS -->
                    <?php get_template_part( 'template/admin/event-posteritems' ); ?>
                    <!-- POSTER TYPES -->
                    <?php get_template_part( 'template/admin/event-postertype' ); ?>
                    <!-- SPONSOR LIST -->
                    <?php get_template_part( 'template/admin/event-sponsor-list' ); ?>
                    <!-- SPONSOR TYPES -->
                    <?php get_template_part( 'template/admin/event-sponsor-type' ); ?>
                     <!-- SPONSOR OPTIONS -->
                     <?php get_template_part( 'template/admin/event-sponsor-options' ); ?>
                    <!-- OPTIONS -->
                    <?php get_template_part( 'template/admin/event-options' ); ?>
                    <!-- EMAIL MAILING -->
                    <?php get_template_part( 'template/admin/event-email-mailing' ); ?>
                    <!-- EMAIL TEMPLATE -->
                    <?php get_template_part( 'template/admin/event-email-template' ); ?>
                    
                </div>
            </div>
        </div>
    </div>
</div>