<div class="container">
		<div class="row">
			<div class="col-sm-12 element-wrapper">
				<div class="about-heading">
					$Title
				</div>
				<% if $ExperienceDescription %>
					<div class="about-description">
						$ExperienceDescription
					</div>
				<% end_if %>
			</div>

			<% loop Organisations %>
			<div class="col-xs-6 col-sm-4 col-md-3">
				<div class="skill-wrapper">
					<% if $OrganisationLogo %>
						<div class="skill-logo">
							<img src="$OrganisationLogo.Link" alt="Skill Logo">
						</div>
					<% end_if %>
				</div>
			</div>
			<% end_loop %>
		</div>
	</div>