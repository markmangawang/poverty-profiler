<div class="ui fullscreen modal" id="profile-event-modal">
	<div class="ui actions headers">
		<div class="ui left floated header">
			<span class="marginal">Purok Name</span>
		</div>	
		<a class="cancel"><i class="close icon"></i></a>
	</div>
	<div class="ui content">
		<div class="ui equal width form">
			<form method="POST" action="scripts/insert_novel.php">
				<div class="ui fields">
					<div class="field">
						<div class="ui left corner labeled input">
							<input type="text" placeholder="Enter Household Name">
							<div class="ui left corner label">
								<i class="asterisk icon"></i>
							</div>
						</div>
					</div>
					<div class="field">
						<div class="ui icon input">
						  <i class="calendar icon"></i>
						  <input type="date" placeholder="Date">
						</div>
					</div>
				</div>
				<!-- Start Structure -->
				<div>
					<table class="ui structured celled table">
						<thead>
							<tr>
								<th colspan="4">I Demography</th>
								<th></th>
								<th colspan="4">III Social Adequacy</th>
							</tr>
							<tr>
								<th>Population in Age Bracket</th>
								<th class="one wide column">Male</th>
								<th class="one wide column">Female</th>
								<th class="one wide column">Total</th>
								<th></th>
								<th colspan="2"><em>Health, (Source of Data-CHO/BHW)</em></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>• Below 1</td>
								<td><input type="number" name="age-bracket-male-col-1"></td>
								<td><input type="number" name="age-bracket-female-col-1"></td>
								<td>Display Total</td>
								<td></td>
								<td><strong>No. of Maternal Deaths</strong></td>
								<td><input type="number" name="no-maternal-deaths"></td>
							</tr>
							<tr>
								<td>• 1-2</td>
								<td><input type="number" name="age-bracket-male-col-2"></td>
								<td><input type="number" name="age-bracket-female-col-2"></td>
								<td>Display Total</td>
								<td></td>
								<td colspan="4"><strong>No. of Teenage Pregnancy</strong></td>
							</tr>
							<tr>
								<td>• 3-5</td>
								<td><input type="number" name="age-bracket-male-col-3"></td>
								<td><input type="number" name="age-bracket-female-col-3"></td>
								<td>Display Total</td>
								<td></td>
								<td>• Below 15</td>
								<td><input type="number" name="no-teenage-pregnancy-below-15"></td>
							</tr>
							<tr>
								<td>• 6-11</td>
								<td><input type="number" name="age-bracket-male-col-4"></td>
								<td><input type="number" name="age-bracket-female-col-4"></td>
								<td>Display Total</td>
								<td></td>
								<td>• 5-19</td>
								<td><input type="number" name="no-teenage-pregnancy-15-19"></td>
							</tr>
						</tbody>
					</table>
				</div>
				<!-- End Structure -->
				<div class="ui tiny fluid buttons">					
					<button class="ui teal button" type="submit">
						<i class="save icon"></i>
						Save
					</button>
					<div class="or"></div>
					<button class="ui icon button" type="reset">
						<i class="refresh icon"></i>
						Reset
					</button>
				</div>
			</form>
		</div>
	</div>
</div>