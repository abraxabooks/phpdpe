<?php
interface EngineVisitor {
	public function visitCamshaft(Camshaft $camshaft);
	public function visitEngine(Engine $camshaft);
	public function visitPiston(Piston $camshaft);
	public function visitSparkPlug(SparkPlug $camshaft);
}
?>