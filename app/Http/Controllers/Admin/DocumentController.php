<?php

namespace App\Http\Controllers\Admin;

use App\Document;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    public function get(int $id)
    {
        // Find the document
        $document = Document::Find($id);

        // Get the path to the file
        $path = storage_path('docs/' . $id);

        // Get the content of the file
        $file_contents = file_get_contents($path);

        // Return the file
        return response($file_contents)
            ->header('Cache-Control', 'no-cache private')
            ->header('Content-Description', 'File Transfer')
            ->header('Content-Type', $document->mimetype)
            ->header('Content-length', strlen($file_contents))
            ->header('Content-Disposition', 'attachment; filename="' . $document->filename .'"')
            ->header('Content-Transfer-Encoding', 'binary');
    }

    public function store(Request $request)
    {
        // Get the file
        $file = $request->file('file');

        // Create a new document
        $document = new Document();
        $document->filename = $file->getClientOriginalName();
        $document->mimetype = $file->getClientMimeType();
        $document->size = $file->getSize();
        $document->hash = hash_file('sha256', $file->path());

        // Save the document
        $document->save();

        // Move the file to storage
        $file->move(storage_path('docs'), $document->id);

        // Attach the document to the session
        $documents = session()->get('documents');
        array_push($documents, $document->id);

        session()->put('documents', $documents);

        // Return success
        return response()->json(
            ['success' => $document->filename,
                'id' => $document->id,
            ]
        );
    }

    public function delete(int $id)
    {
        // Find the document
        $document = Document::Find($id);
        if ($document === null) {
            // TODO: changement me
            return redirect('image/list')->with('errorMessage', 'File not found !');
        }

        // Get path to the document
        $path = storage_path('docs/'.$document->id);

        // Remove the file
        if (file_exists($path)) {
            unlink($path);
        }

        // Remove from session
        $documents = session()->get('documents');
        if ($documents !== null) {
            $key = array_search($id, $documents);
            if ($key !== false) {
                unset($documents[$key]);
            }
            session()->put('documents', $documents);
        }

        // Remove the object
        $document->delete();

        return null;
    }

    public function stats()
    {
        $count = Document::count();
        $sum = Document::sum('size');

        return view('admin.config.documents')
            ->with('count', $count)
            ->with('sum', $sum);
    }

    public function check()
    {
        $documents = Document::All();

        return view('admin.config.check')
            ->with('documents', $documents);
    }
}
