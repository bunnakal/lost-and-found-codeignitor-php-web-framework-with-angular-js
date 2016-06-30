<div class="separator50"></div>
<div class="line-compress line-max">
	<div class="line">

		<datepicker date-format="MMMM d, y"
			button-prev="&lt;i class=&quot;fa fa-arrow-circle-left&quot;&gt;&lt;/i&gt;"
			button-next="&lt;i class=&quot;fa fa-arrow-circle-right&quot;&gt;&lt;/i&gt;"
			class="ng-isolate-scope"> <input ng-model="date1" type="text"
			class="font-fontawesome font-light radius3 ng-valid ng-touched ng-dirty ng-valid-parse"
			placeholder=" Choose a date">
		<div class="_720kb-datepicker-calendar ng-scope"
			ng-blur="hideCalendar()">
			<div class="_720kb-datepicker-calendar-header" ng-hide="isMobile()">
				<div class="_720kb-datepicker-calendar-header-left">
					<a href="javascript:void(0)" ng-click="prevMonth()"><i
						class="fa fa-arrow-circle-left"></i> </a>
				</div>
				<div
					class="_720kb-datepicker-calendar-header-middle _720kb-datepicker-calendar-month ng-binding">
					July <a href="javascript:void(0)"
						ng-click="showYearsPagination = !showYearsPagination"><span
						class="ng-binding">2015 <!-- ngIf: !showYearsPagination --> <i
							ng-if="!showYearsPagination" class="ng-scope">▾</i> <!-- end ngIf: !showYearsPagination -->
							<!-- ngIf: showYearsPagination -->
					</span> </a>
				</div>
				<div class="_720kb-datepicker-calendar-header-right">
					<a href="javascript:void(0)" ng-click="nextMonth()"><i
						class="fa fa-arrow-circle-right"></i> </a>
				</div>
			</div>
			<div class="_720kb-datepicker-calendar-header ng-hide"
				ng-show="isMobile()">
				<div
					class="_720kb-datepicker-calendar-header-middle _720kb-datepicker-mobile-item _720kb-datepicker-calendar-month">
					<select ng-model="month" ng-change="selectedMonthHandle(month)"
						class="ng-pristine ng-untouched ng-valid">
						<!-- ngRepeat: item in months -->
						<option ng-repeat="item in months" ng-selected="month === item"
							ng-disabled="!isSelectableMaxDate(item + &quot; &quot; + day + &quot;, &quot; + year) || !isSelectableMinDate(item + &quot; &quot; + day + &quot;, &quot; + year)"
							ng-value="item" class="ng-binding ng-scope" value="January">January</option>
						<!-- end ngRepeat: item in months -->
						<option ng-repeat="item in months" ng-selected="month === item"
							ng-disabled="!isSelectableMaxDate(item + &quot; &quot; + day + &quot;, &quot; + year) || !isSelectableMinDate(item + &quot; &quot; + day + &quot;, &quot; + year)"
							ng-value="item" class="ng-binding ng-scope" value="February">February</option>
						<!-- end ngRepeat: item in months -->
						<option ng-repeat="item in months" ng-selected="month === item"
							ng-disabled="!isSelectableMaxDate(item + &quot; &quot; + day + &quot;, &quot; + year) || !isSelectableMinDate(item + &quot; &quot; + day + &quot;, &quot; + year)"
							ng-value="item" class="ng-binding ng-scope" value="March">March</option>
						<!-- end ngRepeat: item in months -->
						<option ng-repeat="item in months" ng-selected="month === item"
							ng-disabled="!isSelectableMaxDate(item + &quot; &quot; + day + &quot;, &quot; + year) || !isSelectableMinDate(item + &quot; &quot; + day + &quot;, &quot; + year)"
							ng-value="item" class="ng-binding ng-scope" value="April">April</option>
						<!-- end ngRepeat: item in months -->
						<option ng-repeat="item in months" ng-selected="month === item"
							ng-disabled="!isSelectableMaxDate(item + &quot; &quot; + day + &quot;, &quot; + year) || !isSelectableMinDate(item + &quot; &quot; + day + &quot;, &quot; + year)"
							ng-value="item" class="ng-binding ng-scope" value="May">May</option>
						<!-- end ngRepeat: item in months -->
						<option ng-repeat="item in months" ng-selected="month === item"
							ng-disabled="!isSelectableMaxDate(item + &quot; &quot; + day + &quot;, &quot; + year) || !isSelectableMinDate(item + &quot; &quot; + day + &quot;, &quot; + year)"
							ng-value="item" class="ng-binding ng-scope" value="June">June</option>
						<!-- end ngRepeat: item in months -->
						<option ng-repeat="item in months" ng-selected="month === item"
							ng-disabled="!isSelectableMaxDate(item + &quot; &quot; + day + &quot;, &quot; + year) || !isSelectableMinDate(item + &quot; &quot; + day + &quot;, &quot; + year)"
							ng-value="item" class="ng-binding ng-scope" value="July"
							selected="selected">July</option>
						<!-- end ngRepeat: item in months -->
						<option ng-repeat="item in months" ng-selected="month === item"
							ng-disabled="!isSelectableMaxDate(item + &quot; &quot; + day + &quot;, &quot; + year) || !isSelectableMinDate(item + &quot; &quot; + day + &quot;, &quot; + year)"
							ng-value="item" class="ng-binding ng-scope" value="August">August</option>
						<!-- end ngRepeat: item in months -->
						<option ng-repeat="item in months" ng-selected="month === item"
							ng-disabled="!isSelectableMaxDate(item + &quot; &quot; + day + &quot;, &quot; + year) || !isSelectableMinDate(item + &quot; &quot; + day + &quot;, &quot; + year)"
							ng-value="item" class="ng-binding ng-scope" value="September">September</option>
						<!-- end ngRepeat: item in months -->
						<option ng-repeat="item in months" ng-selected="month === item"
							ng-disabled="!isSelectableMaxDate(item + &quot; &quot; + day + &quot;, &quot; + year) || !isSelectableMinDate(item + &quot; &quot; + day + &quot;, &quot; + year)"
							ng-value="item" class="ng-binding ng-scope" value="October">October</option>
						<!-- end ngRepeat: item in months -->
						<option ng-repeat="item in months" ng-selected="month === item"
							ng-disabled="!isSelectableMaxDate(item + &quot; &quot; + day + &quot;, &quot; + year) || !isSelectableMinDate(item + &quot; &quot; + day + &quot;, &quot; + year)"
							ng-value="item" class="ng-binding ng-scope" value="November">November</option>
						<!-- end ngRepeat: item in months -->
						<option ng-repeat="item in months" ng-selected="month === item"
							ng-disabled="!isSelectableMaxDate(item + &quot; &quot; + day + &quot;, &quot; + year) || !isSelectableMinDate(item + &quot; &quot; + day + &quot;, &quot; + year)"
							ng-value="item" class="ng-binding ng-scope" value="December">December</option>
						<!-- end ngRepeat: item in months -->
					</select>
				</div>
			</div>
			<div class="_720kb-datepicker-calendar-header ng-hide"
				ng-show="isMobile()">
				<div
					class="_720kb-datepicker-calendar-header-middle _720kb-datepicker-mobile-item _720kb-datepicker-calendar-month">
					<select ng-model="mobileYear" ng-change="setNewYear(mobileYear)"
						class="ng-pristine ng-untouched ng-valid"><option
							value="? undefined:undefined ?"></option>
						<!-- ngRepeat: item in paginationYears -->
						<option ng-repeat="item in paginationYears"
							ng-selected="year === item" ng-value="item"
							ng-disabled="!isSelectableMinYear(item) || !isSelectableMaxYear(item)"
							class="ng-binding ng-scope" value="2005">2005</option>
						<!-- end ngRepeat: item in paginationYears -->
						<option ng-repeat="item in paginationYears"
							ng-selected="year === item" ng-value="item"
							ng-disabled="!isSelectableMinYear(item) || !isSelectableMaxYear(item)"
							class="ng-binding ng-scope" value="2006">2006</option>
						<!-- end ngRepeat: item in paginationYears -->
						<option ng-repeat="item in paginationYears"
							ng-selected="year === item" ng-value="item"
							ng-disabled="!isSelectableMinYear(item) || !isSelectableMaxYear(item)"
							class="ng-binding ng-scope" value="2007">2007</option>
						<!-- end ngRepeat: item in paginationYears -->
						<option ng-repeat="item in paginationYears"
							ng-selected="year === item" ng-value="item"
							ng-disabled="!isSelectableMinYear(item) || !isSelectableMaxYear(item)"
							class="ng-binding ng-scope" value="2008">2008</option>
						<!-- end ngRepeat: item in paginationYears -->
						<option ng-repeat="item in paginationYears"
							ng-selected="year === item" ng-value="item"
							ng-disabled="!isSelectableMinYear(item) || !isSelectableMaxYear(item)"
							class="ng-binding ng-scope" value="2009">2009</option>
						<!-- end ngRepeat: item in paginationYears -->
						<option ng-repeat="item in paginationYears"
							ng-selected="year === item" ng-value="item"
							ng-disabled="!isSelectableMinYear(item) || !isSelectableMaxYear(item)"
							class="ng-binding ng-scope" value="2010">2010</option>
						<!-- end ngRepeat: item in paginationYears -->
						<option ng-repeat="item in paginationYears"
							ng-selected="year === item" ng-value="item"
							ng-disabled="!isSelectableMinYear(item) || !isSelectableMaxYear(item)"
							class="ng-binding ng-scope" value="2011">2011</option>
						<!-- end ngRepeat: item in paginationYears -->
						<option ng-repeat="item in paginationYears"
							ng-selected="year === item" ng-value="item"
							ng-disabled="!isSelectableMinYear(item) || !isSelectableMaxYear(item)"
							class="ng-binding ng-scope" value="2012">2012</option>
						<!-- end ngRepeat: item in paginationYears -->
						<option ng-repeat="item in paginationYears"
							ng-selected="year === item" ng-value="item"
							ng-disabled="!isSelectableMinYear(item) || !isSelectableMaxYear(item)"
							class="ng-binding ng-scope" value="2013">2013</option>
						<!-- end ngRepeat: item in paginationYears -->
						<option ng-repeat="item in paginationYears"
							ng-selected="year === item" ng-value="item"
							ng-disabled="!isSelectableMinYear(item) || !isSelectableMaxYear(item)"
							class="ng-binding ng-scope" value="2014">2014</option>
						<!-- end ngRepeat: item in paginationYears -->
						<option ng-repeat="item in paginationYears"
							ng-selected="year === item" ng-value="item"
							ng-disabled="!isSelectableMinYear(item) || !isSelectableMaxYear(item)"
							class="ng-binding ng-scope" value="2015" selected="selected">2015</option>
						<!-- end ngRepeat: item in paginationYears -->
						<option ng-repeat="item in paginationYears"
							ng-selected="year === item" ng-value="item"
							ng-disabled="!isSelectableMinYear(item) || !isSelectableMaxYear(item)"
							class="ng-binding ng-scope" value="2016">2016</option>
						<!-- end ngRepeat: item in paginationYears -->
						<option ng-repeat="item in paginationYears"
							ng-selected="year === item" ng-value="item"
							ng-disabled="!isSelectableMinYear(item) || !isSelectableMaxYear(item)"
							class="ng-binding ng-scope" value="2017">2017</option>
						<!-- end ngRepeat: item in paginationYears -->
						<option ng-repeat="item in paginationYears"
							ng-selected="year === item" ng-value="item"
							ng-disabled="!isSelectableMinYear(item) || !isSelectableMaxYear(item)"
							class="ng-binding ng-scope" value="2018">2018</option>
						<!-- end ngRepeat: item in paginationYears -->
						<option ng-repeat="item in paginationYears"
							ng-selected="year === item" ng-value="item"
							ng-disabled="!isSelectableMinYear(item) || !isSelectableMaxYear(item)"
							class="ng-binding ng-scope" value="2019">2019</option>
						<!-- end ngRepeat: item in paginationYears -->
						<option ng-repeat="item in paginationYears"
							ng-selected="year === item" ng-value="item"
							ng-disabled="!isSelectableMinYear(item) || !isSelectableMaxYear(item)"
							class="ng-binding ng-scope" value="2020">2020</option>
						<!-- end ngRepeat: item in paginationYears -->
						<option ng-repeat="item in paginationYears"
							ng-selected="year === item" ng-value="item"
							ng-disabled="!isSelectableMinYear(item) || !isSelectableMaxYear(item)"
							class="ng-binding ng-scope" value="2021">2021</option>
						<!-- end ngRepeat: item in paginationYears -->
						<option ng-repeat="item in paginationYears"
							ng-selected="year === item" ng-value="item"
							ng-disabled="!isSelectableMinYear(item) || !isSelectableMaxYear(item)"
							class="ng-binding ng-scope" value="2022">2022</option>
						<!-- end ngRepeat: item in paginationYears -->
						<option ng-repeat="item in paginationYears"
							ng-selected="year === item" ng-value="item"
							ng-disabled="!isSelectableMinYear(item) || !isSelectableMaxYear(item)"
							class="ng-binding ng-scope" value="2023">2023</option>
						<!-- end ngRepeat: item in paginationYears -->
						<option ng-repeat="item in paginationYears"
							ng-selected="year === item" ng-value="item"
							ng-disabled="!isSelectableMinYear(item) || !isSelectableMaxYear(item)"
							class="ng-binding ng-scope" value="2024">2024</option>
						<!-- end ngRepeat: item in paginationYears -->
					</select>
				</div>
			</div>
			<div class="_720kb-datepicker-calendar-header ng-hide"
				ng-show="showYearsPagination">
				<div class="_720kb-datepicker-calendar-years-pagination">
					<!-- ngRepeat: y in paginationYears -->
					<a
						ng-class="{&#39;_720kb-datepicker-active&#39;: y === year, &#39;_720kb-datepicker-disabled&#39;: !isSelectableMaxYear(y) || !isSelectableMinYear(y)}"
						href="javascript:void(0)" ng-click="setNewYear(y)"
						ng-repeat="y in paginationYears" class="ng-binding ng-scope">2005</a>
					<!-- end ngRepeat: y in paginationYears -->
					<a
						ng-class="{&#39;_720kb-datepicker-active&#39;: y === year, &#39;_720kb-datepicker-disabled&#39;: !isSelectableMaxYear(y) || !isSelectableMinYear(y)}"
						href="javascript:void(0)" ng-click="setNewYear(y)"
						ng-repeat="y in paginationYears" class="ng-binding ng-scope">2006</a>
					<!-- end ngRepeat: y in paginationYears -->
					<a
						ng-class="{&#39;_720kb-datepicker-active&#39;: y === year, &#39;_720kb-datepicker-disabled&#39;: !isSelectableMaxYear(y) || !isSelectableMinYear(y)}"
						href="javascript:void(0)" ng-click="setNewYear(y)"
						ng-repeat="y in paginationYears" class="ng-binding ng-scope">2007</a>
					<!-- end ngRepeat: y in paginationYears -->
					<a
						ng-class="{&#39;_720kb-datepicker-active&#39;: y === year, &#39;_720kb-datepicker-disabled&#39;: !isSelectableMaxYear(y) || !isSelectableMinYear(y)}"
						href="javascript:void(0)" ng-click="setNewYear(y)"
						ng-repeat="y in paginationYears" class="ng-binding ng-scope">2008</a>
					<!-- end ngRepeat: y in paginationYears -->
					<a
						ng-class="{&#39;_720kb-datepicker-active&#39;: y === year, &#39;_720kb-datepicker-disabled&#39;: !isSelectableMaxYear(y) || !isSelectableMinYear(y)}"
						href="javascript:void(0)" ng-click="setNewYear(y)"
						ng-repeat="y in paginationYears" class="ng-binding ng-scope">2009</a>
					<!-- end ngRepeat: y in paginationYears -->
					<a
						ng-class="{&#39;_720kb-datepicker-active&#39;: y === year, &#39;_720kb-datepicker-disabled&#39;: !isSelectableMaxYear(y) || !isSelectableMinYear(y)}"
						href="javascript:void(0)" ng-click="setNewYear(y)"
						ng-repeat="y in paginationYears" class="ng-binding ng-scope">2010</a>
					<!-- end ngRepeat: y in paginationYears -->
					<a
						ng-class="{&#39;_720kb-datepicker-active&#39;: y === year, &#39;_720kb-datepicker-disabled&#39;: !isSelectableMaxYear(y) || !isSelectableMinYear(y)}"
						href="javascript:void(0)" ng-click="setNewYear(y)"
						ng-repeat="y in paginationYears" class="ng-binding ng-scope">2011</a>
					<!-- end ngRepeat: y in paginationYears -->
					<a
						ng-class="{&#39;_720kb-datepicker-active&#39;: y === year, &#39;_720kb-datepicker-disabled&#39;: !isSelectableMaxYear(y) || !isSelectableMinYear(y)}"
						href="javascript:void(0)" ng-click="setNewYear(y)"
						ng-repeat="y in paginationYears" class="ng-binding ng-scope">2012</a>
					<!-- end ngRepeat: y in paginationYears -->
					<a
						ng-class="{&#39;_720kb-datepicker-active&#39;: y === year, &#39;_720kb-datepicker-disabled&#39;: !isSelectableMaxYear(y) || !isSelectableMinYear(y)}"
						href="javascript:void(0)" ng-click="setNewYear(y)"
						ng-repeat="y in paginationYears" class="ng-binding ng-scope">2013</a>
					<!-- end ngRepeat: y in paginationYears -->
					<a
						ng-class="{&#39;_720kb-datepicker-active&#39;: y === year, &#39;_720kb-datepicker-disabled&#39;: !isSelectableMaxYear(y) || !isSelectableMinYear(y)}"
						href="javascript:void(0)" ng-click="setNewYear(y)"
						ng-repeat="y in paginationYears" class="ng-binding ng-scope">2014</a>
					<!-- end ngRepeat: y in paginationYears -->
					<a
						ng-class="{&#39;_720kb-datepicker-active&#39;: y === year, &#39;_720kb-datepicker-disabled&#39;: !isSelectableMaxYear(y) || !isSelectableMinYear(y)}"
						href="javascript:void(0)" ng-click="setNewYear(y)"
						ng-repeat="y in paginationYears"
						class="ng-binding ng-scope _720kb-datepicker-active">2015</a>
					<!-- end ngRepeat: y in paginationYears -->
					<a
						ng-class="{&#39;_720kb-datepicker-active&#39;: y === year, &#39;_720kb-datepicker-disabled&#39;: !isSelectableMaxYear(y) || !isSelectableMinYear(y)}"
						href="javascript:void(0)" ng-click="setNewYear(y)"
						ng-repeat="y in paginationYears" class="ng-binding ng-scope">2016</a>
					<!-- end ngRepeat: y in paginationYears -->
					<a
						ng-class="{&#39;_720kb-datepicker-active&#39;: y === year, &#39;_720kb-datepicker-disabled&#39;: !isSelectableMaxYear(y) || !isSelectableMinYear(y)}"
						href="javascript:void(0)" ng-click="setNewYear(y)"
						ng-repeat="y in paginationYears" class="ng-binding ng-scope">2017</a>
					<!-- end ngRepeat: y in paginationYears -->
					<a
						ng-class="{&#39;_720kb-datepicker-active&#39;: y === year, &#39;_720kb-datepicker-disabled&#39;: !isSelectableMaxYear(y) || !isSelectableMinYear(y)}"
						href="javascript:void(0)" ng-click="setNewYear(y)"
						ng-repeat="y in paginationYears" class="ng-binding ng-scope">2018</a>
					<!-- end ngRepeat: y in paginationYears -->
					<a
						ng-class="{&#39;_720kb-datepicker-active&#39;: y === year, &#39;_720kb-datepicker-disabled&#39;: !isSelectableMaxYear(y) || !isSelectableMinYear(y)}"
						href="javascript:void(0)" ng-click="setNewYear(y)"
						ng-repeat="y in paginationYears" class="ng-binding ng-scope">2019</a>
					<!-- end ngRepeat: y in paginationYears -->
					<a
						ng-class="{&#39;_720kb-datepicker-active&#39;: y === year, &#39;_720kb-datepicker-disabled&#39;: !isSelectableMaxYear(y) || !isSelectableMinYear(y)}"
						href="javascript:void(0)" ng-click="setNewYear(y)"
						ng-repeat="y in paginationYears" class="ng-binding ng-scope">2020</a>
					<!-- end ngRepeat: y in paginationYears -->
					<a
						ng-class="{&#39;_720kb-datepicker-active&#39;: y === year, &#39;_720kb-datepicker-disabled&#39;: !isSelectableMaxYear(y) || !isSelectableMinYear(y)}"
						href="javascript:void(0)" ng-click="setNewYear(y)"
						ng-repeat="y in paginationYears" class="ng-binding ng-scope">2021</a>
					<!-- end ngRepeat: y in paginationYears -->
					<a
						ng-class="{&#39;_720kb-datepicker-active&#39;: y === year, &#39;_720kb-datepicker-disabled&#39;: !isSelectableMaxYear(y) || !isSelectableMinYear(y)}"
						href="javascript:void(0)" ng-click="setNewYear(y)"
						ng-repeat="y in paginationYears" class="ng-binding ng-scope">2022</a>
					<!-- end ngRepeat: y in paginationYears -->
					<a
						ng-class="{&#39;_720kb-datepicker-active&#39;: y === year, &#39;_720kb-datepicker-disabled&#39;: !isSelectableMaxYear(y) || !isSelectableMinYear(y)}"
						href="javascript:void(0)" ng-click="setNewYear(y)"
						ng-repeat="y in paginationYears" class="ng-binding ng-scope">2023</a>
					<!-- end ngRepeat: y in paginationYears -->
					<a
						ng-class="{&#39;_720kb-datepicker-active&#39;: y === year, &#39;_720kb-datepicker-disabled&#39;: !isSelectableMaxYear(y) || !isSelectableMinYear(y)}"
						href="javascript:void(0)" ng-click="setNewYear(y)"
						ng-repeat="y in paginationYears" class="ng-binding ng-scope">2024</a>
					<!-- end ngRepeat: y in paginationYears -->
				</div>
				<div class="_720kb-datepicker-calendar-years-pagination-pages">
					<a href="javascript:void(0)"
						ng-click="paginateYears(paginationYears[0])"
						ng-class="{&#39;_720kb-datepicker-item-hidden&#39;: paginationYearsPrevDisabled}"><i
						class="fa fa-arrow-circle-left"></i> </a><a
						href="javascript:void(0)"
						ng-click="paginateYears(paginationYears[paginationYears.length -1 ])"
						ng-class="{&#39;_720kb-datepicker-item-hidden&#39;: paginationYearsNextDisabled}"><i
						class="fa fa-arrow-circle-right"></i> </a>
				</div>
			</div>
			<div class="_720kb-datepicker-calendar-days-header">
				<!-- ngRepeat: d in daysInString -->
				<div ng-repeat="d in daysInString" class="ng-binding ng-scope">Sun</div>
				<!-- end ngRepeat: d in daysInString -->
				<div ng-repeat="d in daysInString" class="ng-binding ng-scope">Mon</div>
				<!-- end ngRepeat: d in daysInString -->
				<div ng-repeat="d in daysInString" class="ng-binding ng-scope">Tue</div>
				<!-- end ngRepeat: d in daysInString -->
				<div ng-repeat="d in daysInString" class="ng-binding ng-scope">Wed</div>
				<!-- end ngRepeat: d in daysInString -->
				<div ng-repeat="d in daysInString" class="ng-binding ng-scope">Thu</div>
				<!-- end ngRepeat: d in daysInString -->
				<div ng-repeat="d in daysInString" class="ng-binding ng-scope">Fri</div>
				<!-- end ngRepeat: d in daysInString -->
				<div ng-repeat="d in daysInString" class="ng-binding ng-scope">Sat</div>
				<!-- end ngRepeat: d in daysInString -->
			</div>
			<div class="_720kb-datepicker-calendar-body">
				<!-- ngRepeat: px in prevMonthDays -->
				<a href="javascript:void(0)" ng-repeat="px in prevMonthDays"
					class="_720kb-datepicker-calendar-day _720kb-datepicker-disabled ng-binding ng-scope">28</a>
				<!-- end ngRepeat: px in prevMonthDays -->
				<a href="javascript:void(0)" ng-repeat="px in prevMonthDays"
					class="_720kb-datepicker-calendar-day _720kb-datepicker-disabled ng-binding ng-scope">29</a>
				<!-- end ngRepeat: px in prevMonthDays -->
				<a href="javascript:void(0)" ng-repeat="px in prevMonthDays"
					class="_720kb-datepicker-calendar-day _720kb-datepicker-disabled ng-binding ng-scope">30</a>
				<!-- end ngRepeat: px in prevMonthDays -->
				<!-- ngRepeat: item in days -->
				<a href="javascript:void(0)" ng-repeat="item in days"
					ng-click="setDatepickerDay(item)"
					ng-class="{&#39;_720kb-datepicker-active&#39;: day === item, &#39;_720kb-datepicker-disabled&#39;: !isSelectableMinDate(year + &#39;/&#39; + monthNumber + &#39;/&#39; + item ) || !isSelectableMaxDate(year + &#39;/&#39; + monthNumber + &#39;/&#39; + item)}"
					class="_720kb-datepicker-calendar-day ng-binding ng-scope">1</a>
				<!-- end ngRepeat: item in days -->
				<a href="javascript:void(0)" ng-repeat="item in days"
					ng-click="setDatepickerDay(item)"
					ng-class="{&#39;_720kb-datepicker-active&#39;: day === item, &#39;_720kb-datepicker-disabled&#39;: !isSelectableMinDate(year + &#39;/&#39; + monthNumber + &#39;/&#39; + item ) || !isSelectableMaxDate(year + &#39;/&#39; + monthNumber + &#39;/&#39; + item)}"
					class="_720kb-datepicker-calendar-day ng-binding ng-scope">2</a>
				<!-- end ngRepeat: item in days -->
				<a href="javascript:void(0)" ng-repeat="item in days"
					ng-click="setDatepickerDay(item)"
					ng-class="{&#39;_720kb-datepicker-active&#39;: day === item, &#39;_720kb-datepicker-disabled&#39;: !isSelectableMinDate(year + &#39;/&#39; + monthNumber + &#39;/&#39; + item ) || !isSelectableMaxDate(year + &#39;/&#39; + monthNumber + &#39;/&#39; + item)}"
					class="_720kb-datepicker-calendar-day ng-binding ng-scope">3</a>
				<!-- end ngRepeat: item in days -->
				<a href="javascript:void(0)" ng-repeat="item in days"
					ng-click="setDatepickerDay(item)"
					ng-class="{&#39;_720kb-datepicker-active&#39;: day === item, &#39;_720kb-datepicker-disabled&#39;: !isSelectableMinDate(year + &#39;/&#39; + monthNumber + &#39;/&#39; + item ) || !isSelectableMaxDate(year + &#39;/&#39; + monthNumber + &#39;/&#39; + item)}"
					class="_720kb-datepicker-calendar-day ng-binding ng-scope">4</a>
				<!-- end ngRepeat: item in days -->
				<a href="javascript:void(0)" ng-repeat="item in days"
					ng-click="setDatepickerDay(item)"
					ng-class="{&#39;_720kb-datepicker-active&#39;: day === item, &#39;_720kb-datepicker-disabled&#39;: !isSelectableMinDate(year + &#39;/&#39; + monthNumber + &#39;/&#39; + item ) || !isSelectableMaxDate(year + &#39;/&#39; + monthNumber + &#39;/&#39; + item)}"
					class="_720kb-datepicker-calendar-day ng-binding ng-scope">5</a>
				<!-- end ngRepeat: item in days -->
				<a href="javascript:void(0)" ng-repeat="item in days"
					ng-click="setDatepickerDay(item)"
					ng-class="{&#39;_720kb-datepicker-active&#39;: day === item, &#39;_720kb-datepicker-disabled&#39;: !isSelectableMinDate(year + &#39;/&#39; + monthNumber + &#39;/&#39; + item ) || !isSelectableMaxDate(year + &#39;/&#39; + monthNumber + &#39;/&#39; + item)}"
					class="_720kb-datepicker-calendar-day ng-binding ng-scope">6</a>
				<!-- end ngRepeat: item in days -->
				<a href="javascript:void(0)" ng-repeat="item in days"
					ng-click="setDatepickerDay(item)"
					ng-class="{&#39;_720kb-datepicker-active&#39;: day === item, &#39;_720kb-datepicker-disabled&#39;: !isSelectableMinDate(year + &#39;/&#39; + monthNumber + &#39;/&#39; + item ) || !isSelectableMaxDate(year + &#39;/&#39; + monthNumber + &#39;/&#39; + item)}"
					class="_720kb-datepicker-calendar-day ng-binding ng-scope">7</a>
				<!-- end ngRepeat: item in days -->
				<a href="javascript:void(0)" ng-repeat="item in days"
					ng-click="setDatepickerDay(item)"
					ng-class="{&#39;_720kb-datepicker-active&#39;: day === item, &#39;_720kb-datepicker-disabled&#39;: !isSelectableMinDate(year + &#39;/&#39; + monthNumber + &#39;/&#39; + item ) || !isSelectableMaxDate(year + &#39;/&#39; + monthNumber + &#39;/&#39; + item)}"
					class="_720kb-datepicker-calendar-day ng-binding ng-scope _720kb-datepicker-active">8</a>
				<!-- end ngRepeat: item in days -->
				<a href="javascript:void(0)" ng-repeat="item in days"
					ng-click="setDatepickerDay(item)"
					ng-class="{&#39;_720kb-datepicker-active&#39;: day === item, &#39;_720kb-datepicker-disabled&#39;: !isSelectableMinDate(year + &#39;/&#39; + monthNumber + &#39;/&#39; + item ) || !isSelectableMaxDate(year + &#39;/&#39; + monthNumber + &#39;/&#39; + item)}"
					class="_720kb-datepicker-calendar-day ng-binding ng-scope">9</a>
				<!-- end ngRepeat: item in days -->
				<a href="javascript:void(0)" ng-repeat="item in days"
					ng-click="setDatepickerDay(item)"
					ng-class="{&#39;_720kb-datepicker-active&#39;: day === item, &#39;_720kb-datepicker-disabled&#39;: !isSelectableMinDate(year + &#39;/&#39; + monthNumber + &#39;/&#39; + item ) || !isSelectableMaxDate(year + &#39;/&#39; + monthNumber + &#39;/&#39; + item)}"
					class="_720kb-datepicker-calendar-day ng-binding ng-scope">10</a>
				<!-- end ngRepeat: item in days -->
				<a href="javascript:void(0)" ng-repeat="item in days"
					ng-click="setDatepickerDay(item)"
					ng-class="{&#39;_720kb-datepicker-active&#39;: day === item, &#39;_720kb-datepicker-disabled&#39;: !isSelectableMinDate(year + &#39;/&#39; + monthNumber + &#39;/&#39; + item ) || !isSelectableMaxDate(year + &#39;/&#39; + monthNumber + &#39;/&#39; + item)}"
					class="_720kb-datepicker-calendar-day ng-binding ng-scope">11</a>
				<!-- end ngRepeat: item in days -->
				<a href="javascript:void(0)" ng-repeat="item in days"
					ng-click="setDatepickerDay(item)"
					ng-class="{&#39;_720kb-datepicker-active&#39;: day === item, &#39;_720kb-datepicker-disabled&#39;: !isSelectableMinDate(year + &#39;/&#39; + monthNumber + &#39;/&#39; + item ) || !isSelectableMaxDate(year + &#39;/&#39; + monthNumber + &#39;/&#39; + item)}"
					class="_720kb-datepicker-calendar-day ng-binding ng-scope">12</a>
				<!-- end ngRepeat: item in days -->
				<a href="javascript:void(0)" ng-repeat="item in days"
					ng-click="setDatepickerDay(item)"
					ng-class="{&#39;_720kb-datepicker-active&#39;: day === item, &#39;_720kb-datepicker-disabled&#39;: !isSelectableMinDate(year + &#39;/&#39; + monthNumber + &#39;/&#39; + item ) || !isSelectableMaxDate(year + &#39;/&#39; + monthNumber + &#39;/&#39; + item)}"
					class="_720kb-datepicker-calendar-day ng-binding ng-scope">13</a>
				<!-- end ngRepeat: item in days -->
				<a href="javascript:void(0)" ng-repeat="item in days"
					ng-click="setDatepickerDay(item)"
					ng-class="{&#39;_720kb-datepicker-active&#39;: day === item, &#39;_720kb-datepicker-disabled&#39;: !isSelectableMinDate(year + &#39;/&#39; + monthNumber + &#39;/&#39; + item ) || !isSelectableMaxDate(year + &#39;/&#39; + monthNumber + &#39;/&#39; + item)}"
					class="_720kb-datepicker-calendar-day ng-binding ng-scope">14</a>
				<!-- end ngRepeat: item in days -->
				<a href="javascript:void(0)" ng-repeat="item in days"
					ng-click="setDatepickerDay(item)"
					ng-class="{&#39;_720kb-datepicker-active&#39;: day === item, &#39;_720kb-datepicker-disabled&#39;: !isSelectableMinDate(year + &#39;/&#39; + monthNumber + &#39;/&#39; + item ) || !isSelectableMaxDate(year + &#39;/&#39; + monthNumber + &#39;/&#39; + item)}"
					class="_720kb-datepicker-calendar-day ng-binding ng-scope">15</a>
				<!-- end ngRepeat: item in days -->
				<a href="javascript:void(0)" ng-repeat="item in days"
					ng-click="setDatepickerDay(item)"
					ng-class="{&#39;_720kb-datepicker-active&#39;: day === item, &#39;_720kb-datepicker-disabled&#39;: !isSelectableMinDate(year + &#39;/&#39; + monthNumber + &#39;/&#39; + item ) || !isSelectableMaxDate(year + &#39;/&#39; + monthNumber + &#39;/&#39; + item)}"
					class="_720kb-datepicker-calendar-day ng-binding ng-scope">16</a>
				<!-- end ngRepeat: item in days -->
				<a href="javascript:void(0)" ng-repeat="item in days"
					ng-click="setDatepickerDay(item)"
					ng-class="{&#39;_720kb-datepicker-active&#39;: day === item, &#39;_720kb-datepicker-disabled&#39;: !isSelectableMinDate(year + &#39;/&#39; + monthNumber + &#39;/&#39; + item ) || !isSelectableMaxDate(year + &#39;/&#39; + monthNumber + &#39;/&#39; + item)}"
					class="_720kb-datepicker-calendar-day ng-binding ng-scope">17</a>
				<!-- end ngRepeat: item in days -->
				<a href="javascript:void(0)" ng-repeat="item in days"
					ng-click="setDatepickerDay(item)"
					ng-class="{&#39;_720kb-datepicker-active&#39;: day === item, &#39;_720kb-datepicker-disabled&#39;: !isSelectableMinDate(year + &#39;/&#39; + monthNumber + &#39;/&#39; + item ) || !isSelectableMaxDate(year + &#39;/&#39; + monthNumber + &#39;/&#39; + item)}"
					class="_720kb-datepicker-calendar-day ng-binding ng-scope">18</a>
				<!-- end ngRepeat: item in days -->
				<a href="javascript:void(0)" ng-repeat="item in days"
					ng-click="setDatepickerDay(item)"
					ng-class="{&#39;_720kb-datepicker-active&#39;: day === item, &#39;_720kb-datepicker-disabled&#39;: !isSelectableMinDate(year + &#39;/&#39; + monthNumber + &#39;/&#39; + item ) || !isSelectableMaxDate(year + &#39;/&#39; + monthNumber + &#39;/&#39; + item)}"
					class="_720kb-datepicker-calendar-day ng-binding ng-scope">19</a>
				<!-- end ngRepeat: item in days -->
				<a href="javascript:void(0)" ng-repeat="item in days"
					ng-click="setDatepickerDay(item)"
					ng-class="{&#39;_720kb-datepicker-active&#39;: day === item, &#39;_720kb-datepicker-disabled&#39;: !isSelectableMinDate(year + &#39;/&#39; + monthNumber + &#39;/&#39; + item ) || !isSelectableMaxDate(year + &#39;/&#39; + monthNumber + &#39;/&#39; + item)}"
					class="_720kb-datepicker-calendar-day ng-binding ng-scope">20</a>
				<!-- end ngRepeat: item in days -->
				<a href="javascript:void(0)" ng-repeat="item in days"
					ng-click="setDatepickerDay(item)"
					ng-class="{&#39;_720kb-datepicker-active&#39;: day === item, &#39;_720kb-datepicker-disabled&#39;: !isSelectableMinDate(year + &#39;/&#39; + monthNumber + &#39;/&#39; + item ) || !isSelectableMaxDate(year + &#39;/&#39; + monthNumber + &#39;/&#39; + item)}"
					class="_720kb-datepicker-calendar-day ng-binding ng-scope">21</a>
				<!-- end ngRepeat: item in days -->
				<a href="javascript:void(0)" ng-repeat="item in days"
					ng-click="setDatepickerDay(item)"
					ng-class="{&#39;_720kb-datepicker-active&#39;: day === item, &#39;_720kb-datepicker-disabled&#39;: !isSelectableMinDate(year + &#39;/&#39; + monthNumber + &#39;/&#39; + item ) || !isSelectableMaxDate(year + &#39;/&#39; + monthNumber + &#39;/&#39; + item)}"
					class="_720kb-datepicker-calendar-day ng-binding ng-scope">22</a>
				<!-- end ngRepeat: item in days -->
				<a href="javascript:void(0)" ng-repeat="item in days"
					ng-click="setDatepickerDay(item)"
					ng-class="{&#39;_720kb-datepicker-active&#39;: day === item, &#39;_720kb-datepicker-disabled&#39;: !isSelectableMinDate(year + &#39;/&#39; + monthNumber + &#39;/&#39; + item ) || !isSelectableMaxDate(year + &#39;/&#39; + monthNumber + &#39;/&#39; + item)}"
					class="_720kb-datepicker-calendar-day ng-binding ng-scope">23</a>
				<!-- end ngRepeat: item in days -->
				<a href="javascript:void(0)" ng-repeat="item in days"
					ng-click="setDatepickerDay(item)"
					ng-class="{&#39;_720kb-datepicker-active&#39;: day === item, &#39;_720kb-datepicker-disabled&#39;: !isSelectableMinDate(year + &#39;/&#39; + monthNumber + &#39;/&#39; + item ) || !isSelectableMaxDate(year + &#39;/&#39; + monthNumber + &#39;/&#39; + item)}"
					class="_720kb-datepicker-calendar-day ng-binding ng-scope">24</a>
				<!-- end ngRepeat: item in days -->
				<a href="javascript:void(0)" ng-repeat="item in days"
					ng-click="setDatepickerDay(item)"
					ng-class="{&#39;_720kb-datepicker-active&#39;: day === item, &#39;_720kb-datepicker-disabled&#39;: !isSelectableMinDate(year + &#39;/&#39; + monthNumber + &#39;/&#39; + item ) || !isSelectableMaxDate(year + &#39;/&#39; + monthNumber + &#39;/&#39; + item)}"
					class="_720kb-datepicker-calendar-day ng-binding ng-scope">25</a>
				<!-- end ngRepeat: item in days -->
				<a href="javascript:void(0)" ng-repeat="item in days"
					ng-click="setDatepickerDay(item)"
					ng-class="{&#39;_720kb-datepicker-active&#39;: day === item, &#39;_720kb-datepicker-disabled&#39;: !isSelectableMinDate(year + &#39;/&#39; + monthNumber + &#39;/&#39; + item ) || !isSelectableMaxDate(year + &#39;/&#39; + monthNumber + &#39;/&#39; + item)}"
					class="_720kb-datepicker-calendar-day ng-binding ng-scope">26</a>
				<!-- end ngRepeat: item in days -->
				<a href="javascript:void(0)" ng-repeat="item in days"
					ng-click="setDatepickerDay(item)"
					ng-class="{&#39;_720kb-datepicker-active&#39;: day === item, &#39;_720kb-datepicker-disabled&#39;: !isSelectableMinDate(year + &#39;/&#39; + monthNumber + &#39;/&#39; + item ) || !isSelectableMaxDate(year + &#39;/&#39; + monthNumber + &#39;/&#39; + item)}"
					class="_720kb-datepicker-calendar-day ng-binding ng-scope">27</a>
				<!-- end ngRepeat: item in days -->
				<a href="javascript:void(0)" ng-repeat="item in days"
					ng-click="setDatepickerDay(item)"
					ng-class="{&#39;_720kb-datepicker-active&#39;: day === item, &#39;_720kb-datepicker-disabled&#39;: !isSelectableMinDate(year + &#39;/&#39; + monthNumber + &#39;/&#39; + item ) || !isSelectableMaxDate(year + &#39;/&#39; + monthNumber + &#39;/&#39; + item)}"
					class="_720kb-datepicker-calendar-day ng-binding ng-scope">28</a>
				<!-- end ngRepeat: item in days -->
				<a href="javascript:void(0)" ng-repeat="item in days"
					ng-click="setDatepickerDay(item)"
					ng-class="{&#39;_720kb-datepicker-active&#39;: day === item, &#39;_720kb-datepicker-disabled&#39;: !isSelectableMinDate(year + &#39;/&#39; + monthNumber + &#39;/&#39; + item ) || !isSelectableMaxDate(year + &#39;/&#39; + monthNumber + &#39;/&#39; + item)}"
					class="_720kb-datepicker-calendar-day ng-binding ng-scope">29</a>
				<!-- end ngRepeat: item in days -->
				<a href="javascript:void(0)" ng-repeat="item in days"
					ng-click="setDatepickerDay(item)"
					ng-class="{&#39;_720kb-datepicker-active&#39;: day === item, &#39;_720kb-datepicker-disabled&#39;: !isSelectableMinDate(year + &#39;/&#39; + monthNumber + &#39;/&#39; + item ) || !isSelectableMaxDate(year + &#39;/&#39; + monthNumber + &#39;/&#39; + item)}"
					class="_720kb-datepicker-calendar-day ng-binding ng-scope">30</a>
				<!-- end ngRepeat: item in days -->
				<a href="javascript:void(0)" ng-repeat="item in days"
					ng-click="setDatepickerDay(item)"
					ng-class="{&#39;_720kb-datepicker-active&#39;: day === item, &#39;_720kb-datepicker-disabled&#39;: !isSelectableMinDate(year + &#39;/&#39; + monthNumber + &#39;/&#39; + item ) || !isSelectableMaxDate(year + &#39;/&#39; + monthNumber + &#39;/&#39; + item)}"
					class="_720kb-datepicker-calendar-day ng-binding ng-scope">31</a>
				<!-- end ngRepeat: item in days -->
				<!-- ngRepeat: nx in nextMonthDays -->
				<a href="javascript:void(0)" ng-repeat="nx in nextMonthDays"
					class="_720kb-datepicker-calendar-day _720kb-datepicker-disabled ng-binding ng-scope">1</a>
				<!-- end ngRepeat: nx in nextMonthDays -->
			</div>
		</div>
		</datepicker>

	</div>
</div>
