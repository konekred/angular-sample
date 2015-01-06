<div>
    <div class="panel panel-default">
        <div class="panel-heading"><i class="fa fa-dot-circle-o"></i> BUSINESS PERMIT APPLICATION INFORMATION</div>
        <div class="panel-body">
			<ul class="nav nav-tabs" role="tablist">
			    <li class="active"><a data-target="#details" role="tab" data-toggle="tab">APPLICATION</a></li>
			    <li><a data-target="#business" role="tab" data-toggle="tab">BUSINESS INFORMATION</a></li>
			    <li><a data-target="#requirements" role="tab" data-toggle="tab">REQUIREMENTS</a></li>
			</ul>
			
			<div class="tab-content">
			    <div class="tab-pane active" id="details">
			    	<table class="table table-striped table-hover">
			    		<tr>
			    			<td style="width:190px">APPLICATION</td>
			    			<td class="uppercase italic">{{ data.BusinessPermitApplication.code }}</td>
			    		</tr>
			    		<tr>
			    			<td>PERMIT TYPE</td>
							<td class="uppercase italic">{{ permitType }}</td>
			    		</tr>
			    		<tr>
			    			<td>PERMIT # REF.</td>
							<td class="uppercase italic">{{ }}</td>
			    		</tr>
			    		<tr>
			    			<td>NAME</td>
							<td class="uppercase italic">{{ data.BusinessOwner.full_name }}</td>
			    		</tr>
			    		<tr>
			    			<td>ADDRESS</td>
							<td class="uppercase italic">{{ data.BusinessOwner.address }}</td>
			    		</tr>
			    		<tr>
			    			<td>CONTACT #</td>
							<td class="uppercase italic">{{ data.BusinessOwner.contact_number }}</td>
			    		</tr>
			    		<tr>
			    			<td>EMAIL</td>
							<td class="italic">{{ data.BusinessOwner.email }}</td>
			    		</tr>
			    	</table>
			    </div>
			    <div class="tab-pane" id="business">
			    	<table class="table table-striped table-hover table-hover">
			    		<tr>
			    			<td style="width:190px">BUSINESS TYPE</td>
			    			<td class="uppercase italic">{{ data.Business.BusinessType.name }}</td>
			    		</tr>
			    		<tr>
			    			<td>BUSINESS NAME</td>
							<td class="uppercase italic">{{ data.Business.name }}</td>
			    		</tr>
			    		<tr>
			    			<td>CONTACT #</td>
							<td class="uppercase italic">{{ data.Business.contact_number }}</td>
			    		</tr>
			    		<tr>
			    			<td>LINE OF BUSINESS</td>
							<td class="uppercase italic">{{ data.Business.line_of_business }}</td>
			    		</tr>
			    		<tr>
			    			<td>ADDRESS</td>
							<td class="uppercase italic">{{ data.Business.address }}</td>
			    		</tr>
			    		<tr>
			    			<td>EMPLOYEES</td>
							<td class="uppercase italic">{{ data.BusinessPermitApplication.number_of_employees | number:0 }}</td>
			    		</tr>
			  
			    		<tr>
			    			<td>CAPITAL INVESTMENT</td>
							<td class="uppercase italic">{{ data.BusinessPermitApplication.capital_investment | number:2  }}</td>
			    		</tr>	
			
			    		<tr>
			    			<td>LAST YEAR DECLARED GROSS</td>
							<td class="uppercase italic">{{ data.BusinessPermitApplication.last_year_declared_gross_sales }}</td>
			    		</tr>		
			    		
			    		<tr>
			    			<td>BUSINESS TAX CLASS</td>
							<td class="uppercase italic">{{ data.BusinessTaxClass.code }}</td>
			    		</tr>
			    		<tr>
			    			<td>PERMIT FEE CLASS</td>
							<td class="uppercase italic">{{ data.BusinessPermitFeeClass.code }}</td>
			    		</tr>
			    		<tr>
			    			<td>ASSET TYPE</td>
							<td class="uppercase italic">{{ data.BusinessAssetType.name }}</td>
			    		</tr>
			    	</table>
			    </div>
			    
			    <div class="tab-pane" id="requirements">
			    	<table class="table table-bordered table-striped table-hover">
			    		<thead>
				    		<tr>
				    			<th>REQUIREMENT</th>
				    			<th>CERTIFICATE #</th>
				    			<th>LOCATION ISSUED</th>
				    			<th>DATE ISSUED</th>
				    			<th class="text-center">STATUS</th>
				    		</tr>
			    		</thead>
			    		<tbody>
			    			<tr ng-repeat="requirement in data.BusinessPermitApplicationRequirement" class="">
			    				<td class="uppercase">{{ requirement.BusinessPermitRequirement.name }}</td>
			    				<td class="uppercase">{{ requirement.certificate_number }}</td>
			    				<td class="uppercase">{{ requirement.location_issued }}</td>
			    				<td class="uppercase">{{ requirement.date_issued }}</td>
			    				<td class="text-center italic" style="width:120px">
			    					<span class="label label-success" ng-if="requirement.status">APPROVED</span>
			    					<span class="label label-danger" ng-if="requirement.status == false">NOT APPROVED</span>
			    				</td>
			    			</tr>
			    		</tbody>
			    	</table>
			    </div>
			</div>
        </div>
    </div>
</div>