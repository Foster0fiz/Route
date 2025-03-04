<?php



namespace App\Http\Controllers;



use Illuminate\Http\Request;



class ProductController extends Controller

{

public function index()

{

return "Все продукты";

}



public function create()

{

return "Добавить новый продукт";

}



public function show($id)

{

return "Продукт ID: $id";

}



public function edit($id)

{

return "Редактировать продукт, ID: $id";

}



public function destroy($id)

{

return "Продукт удален, ID: $id";

}



public function search(Request $request)

{

return "Результаты поиска";

}

}