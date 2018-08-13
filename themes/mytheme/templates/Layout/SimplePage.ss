<div class="container">
	<div class="row">
		<div class="col-sm-12 element-wrapper">
			<div class="about-heading">
				$Title
			</div>
			<% if $Description %>
				<div class="about-description">
					$Description
				</div>
			<% end_if %>
		</div>

		<div class="col-sm-12 col-md-6">
			<% if $ProfileImage %>
				<img src="$ProfileImage.Link" class="profile-image" alt="Profile Image">
			<% end_if %>
		</div>

		<div class="col-sm-12 col-md-6">
			<div class="about-content-wrapper">
				<% if ContentHeading %>
					<div class="about-content-heading">
						$ContentHeading
					</div>
				<% end_if %>

				<div class="about-content">
					$Content
				</div>
			</div>
		</div>
	</div>
</div>