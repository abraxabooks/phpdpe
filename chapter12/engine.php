<?php
interface Engine {
	// Functions having intrinsic state
	public function getSize();
	public function isTurbo();

	// Functions having extrinsic state
	public function diagnose(DiagnosticTool $diagnostic_tool);
}
?>
