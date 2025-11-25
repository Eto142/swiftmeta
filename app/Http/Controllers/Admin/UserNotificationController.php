<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Notification;
use App\Models\User;

class UserNotificationController extends Controller
{
    public function addNotification(Request $request, $id)
    {
        $request->validate([
            'update_notification' => 'required|string'
        ]);

        $user = User::findOrFail($id);

        Notification::create([
            'user_id' => $user->id,
            'message' => $request->update_notification,
        ]);

        return back()->with('success', 'Notification added successfully!');
    }


      // Delete a notification
    public function deleteNotification($id)
    {
        $notification = Notification::findOrFail($id);
        $notification->delete();

        return back()->with('success', 'Notification deleted successfully!');
    }
}
