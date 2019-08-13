<?php
class Alumno extends MY_Controller
{
    /**
     * Action: Index
     * 
     * This method could be `public` property for none-routes usage
     */
    public function index() 
    {
        $this->load->model('alumno_vista_model','almno');

        $almnos = $this->almno->get_all();

        $data = $this->pack($almnos, 201, 'Todos los alumnos.');
        $this->response->json($data);
    }
        
    /**
     * Action: Store
     * 
     * @param array $requestData
     */
    protected function form($requestData=null) 
    {

    }
        
    /**
     * Action: Store
     * 
     * @param array $requestData
     */
    protected function store($requestData=null) 
    {

    }
    
    /**
     * Action: Show
     * 
     * @param int|string $resourceID
     */
    protected function show($resourceID) 
    {
        $this->load->model('alumno_vista_model','almno');

        $almno = $this->almno->get($resourceID);

        $data = $this->pack($almno, 202, 'Alumno encontrado.');
        $this->response->json($data);
    }
    /**
     * Action: Update
     * 
     * @param int|string $resourceID
     * @param array $requestData
     */
    protected function update($resourceID=null, $requestData=null) {$this->response->json(['id'=>$resourceID,'rd'=>$requestData], 201);}
    /**
     * Action: Delete
     * 
     * @param int|string $resourceID Support single resource delete
     * @param array $requestData Support delete parameters
     */
    protected function delete($resourceID=null, $requestData=null) {$this->response->json(['id'=>$resourceID,'rd'=>$requestData], 201);}    
}