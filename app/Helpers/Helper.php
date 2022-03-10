<?php

namespace App\Helpers;


class Helper
{
    public static function chuyen($chuyens){
        $html='';
        foreach ($chuyens as $chuyen){
                $html .='
                    <tr>
                        <td>
                            ' . $chuyen->tenchuyen . '
                        </td>
                        <td>
                            ' . $chuyen->taus->tentau . '
                        </td>
                        <td>
                            ' . $chuyen->tuyens->start . ' - '. $chuyen->tuyens->stop .'
                        </td>
                        <td>
                            ' . $chuyen->gia . ' VNĐ
                        </td>
                        <td>
                            ' . $chuyen->content . '
                        </td>
                        <td>
                            ' . $chuyen->description . '
                        </td>
                        <td>
                             ' . $chuyen->time . '
                        </td>
                        <td>
                            ' . self::active($chuyen->active) . '
                        </td>
                        <td class="table-action">
                            <a href="/admin/chuyen/edit/'.$chuyen->id.'"  class="btn btn-warning"> <i class="fa fa-pencil"></i></a>
                            <a onclick="removeRow('. $chuyen->id .', \'/admin/chuyen/destroy\')" class="btn btn-danger"> <i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                ';
        }
        return $html;
    }

    public static function blog($blogs){
        $html='';
        foreach ($blogs as $blog){
                $html .='
                    <tr>
                        <td>
                            ' . $blog->id . '
                        </td>
                        <td>
                            <a href="' . $blog->thumb . '" target="_blank">
                                <img src="' . $blog->thumb . '" height="100px">
                            </a>

                        </td>
                        <td>
                            ' . $blog->title . '
                        </td>
                        <td>
                            ' . self::active($blog->active) . '
                        </td>
                        <td class="table-action">
                            <a href="/admin/blog/edit/'.$blog->id.'"  class="btn btn-warning"> <i class="fa fa-pencil"></i></a>
                            <a onclick="removeRow('. $blog->id .',\'/admin/blog/destroy\')" class="btn btn-danger"> <i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                ';
        }
        return $html;
    }

    public static function tuyen($tuyens){
        $html='';
        foreach ($tuyens as $tuyen){
                $html .='
                    <tr>

                        <td>
                            ' . $tuyen->start . '
                        </td>
                        <td>
                            ' . $tuyen->stop . '
                        </td>
                        <td>
                            ' . $tuyen->desc . '
                        </td>
                        <td>
                            ' . $tuyen->updated_at . '
                        </td>
                        <td>
                            ' . self::active($tuyen->active) . '
                        </td>
                        <td class="table-action">
                            <a href="/admin/tuyen/edit/'.$tuyen->id.'" class="btn btn-warning"> <i class="fa fa-pencil"></i></a>
                            <a onclick="removeRow('. $tuyen->id .',\'/admin/tuyen/destroy\')" class="btn btn-danger"> <i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                ';
        }
        return $html;
    }

    public static function tau($taus){
        $html='';
        foreach ($taus as $tau){
                $html .='
                    <tr>

                        <td>
                            ' . $tau->tentau . '
                        </td>
                        <td>
                            ' . $tau->soghe . '
                        </td>
                        <td>
                            ' . $tau->updated_at . '
                        </td>
                        <td>
                            ' . self::active($tau->active) . '
                        </td>
                        <td class="table-action">
                            <a href="/admin/tau/edit/'.$tau->id.'" class="btn btn-warning"> <i class="fa fa-pencil"></i></a>
                            <a onclick="removeRow('. $tau->id .', \'/admin/tau/destroy\')" class="btn btn-danger"> <i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                ';
        }
        return $html;
    }

    public static function active($active = 0){
        return $active == 0? '<span class="badge bg-danger ">No active</span>' : '<span class="badge bg-success">Active</span>';
    }

}
