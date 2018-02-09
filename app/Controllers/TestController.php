<?php

namespace App\Controllers;
use App\Models\ModelTableTest as CRUD;

class TestController extends Controller {

    public function index($request, $response) {

        $response->getBody()->write("Hello Slim With Controller");
        return $response;

    }

    //get all data
    public function getAllData($request, $response){
        $data = CRUD::all();
        return $data->toJson();
    }

    //get data by id
    public function getDataById($request, $response){
        $id = $request->getAttribute('id');
        $data = CRUD::where('id', $id)->get();
        return $data->toJson();
    }

    //create data
    public function createData($request, $response) {
        $postVars    = $request->getParsedBody();
        $title       = $postVars['title'];
        $body        = $postVars['body'];
        $category    = $postVars['category'];
        $tag         = $postVars['tag'];

        CRUD::create([
            'title'     => $title,
            'body'      => $body,
            'category'  => $category,
            'tag'       => $tag,
        ]);

        return $response->withJson(array(
            'status' => 200,
            'message' => 'data berhasil ditambah'
        ),200);
    }

    //update data
    public function updateData($request, $response){
        $id          = $request->getAttribute('id');
        $postVars    = $request->getParsedBody();
        $title       = $postVars['title'];
        $body        = $postVars['body'];
        $category    = $postVars['category'];
        $tag         = $postVars['tag'];

        $data = CRUD::where('id', $id)->update([
                                                'title' => $title,
                                                'body' => $body,
                                                'category' => $category,
                                                'tag' => $tag,
                                                ]);
        if ($data) {
            return $response->withJson(array(
                'status' => 200,
                'message' => 'data '.$id.' dirubah'
            ),200);
        } else {
            return $response->withJson(array(
                'status' => 400,
                'message' => 'gagal diubah'
            ),400);
        }

    }

    //delete data by id
    public function deleteData($request, $response) {
        $id = $request->getAttribute('id');
        $data = CRUD::where('id', $id)->delete();

        if ($data) {
            return $response->withJson(array(
                'status' => 200,
                'message' => 'data ' .$id. ' berhasil di hapus'
            ),200);
        } else {
            return $response->withJson(array(
                'status' => 400,
                'message' => 'gagal dihapus'
            ),400);
        }

    }

}