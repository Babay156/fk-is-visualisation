<?php
class DashletStatsView{
	private $sValue;
	private $sTitle;
	private $sClass;
	private $sFilter;

	/**
	 * DashletGroupByPlusView constructor.
	 *
	 * @param $sTitle
	 * @param $sValue
	 * @param $sClass
	 * @param $sFilter
	 */
	public function __construct($sTitle, $sValue, $sClass, $sFilter) 
	{
		$this->sValue = $sValue;
		$this->sTitle = $sTitle;
		$this->sClass = $sClass;
		$this->sFilter = $sFilter;
	}
	public function Display($oPage, $sDashletId, $bEditMode)
	{
		
		$sHtmlTitle = $this->sTitle;
		$sHtmlValue = $this->sValue;
		$sHtmlIconUrl = MetaModel::GetClassIcon($this->sClass);
		$sLinkUrl = utils::GetAbsoluteUrlAppRoot()."pages/UI.php?operation=search&filter=".$sFilter = rawurlencode($this->sFilter->serialize());
		$oPage->add(
<<<HTML
<div id="$sDashletId" class="dashlet-content fk-is-visualisation">
	<a href="$sLinkUrl">
	<div class="fk-is-visualisation--icon">
		$sHtmlIconUrl
	</div>
	<div class="fk-is-visualisation--details">
		<h2 class="fk-is-visualisation--details--title">$sHtmlTitle</h2>
		<div class="fk-is-visualisation--details--value">$sHtmlValue</div>
	</div>
	</a>
</div>
HTML
		);

	}


}