<div class="container">
		<div class="row">
			<div class="col-sm-12 element-wrapper">
				<div class="about-heading">
					$Title
				</div>
				<% if $SkillsDescription %>
					<div class="about-description">
						$SkillsDescription
					</div>
				<% end_if %>
			</div>

			<% loop Skills %>
			<div class="col-xs-6 col-sm-4 col-md-3">
				<div class="skill-wrapper">
					<% if $SkillIcon %>
						<div class="skill-logo">
							<img src="$SkillIcon.Link" alt="Skill Logo">
						</div>
					<% end_if %>

					<div class="break"></div>

					<% if $SkillHeading %>
						<div class="skill-heading">
							$SkillHeading
						</div>
					<% end_if %>

					<% if $SkillDescription %>
						<div class="skill-description">
							$SkillDescription
						</div>
					<% end_if %>
				</div>
			</div>
			<% end_loop %>

		</div>
	</div>