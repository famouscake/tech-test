<?

class Controller
{
    public function createAction()
    {
        $this->renderView('create', []);
    }

    public function listAction()
    {
        $this->renderView('list', []);
    }

    public function renderView($viewName, $data = array())
    {
        $view = PROJECT_DIR. "/views/{$viewName}.php";
        if (!is_readable($view)) {
            throw new \Exception("View File does not Exist");
        }
        extract($data);

        ob_start();
        include $view;
        return ob_get_clean();
    }

}
