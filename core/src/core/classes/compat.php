<?php
/*
 * Copyright 2007-2015 Abstrium <contact (at) pydio.com>
 * This file is part of Pydio.
 *
 * Pydio is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Pydio is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with Pydio.  If not, see <http://www.gnu.org/licenses/>.
 *
 * The latest code can be found at <http://pyd.io/>.
 */

defined('AJXP_EXEC') or die('Access not allowed');

class_alias("Pydio\\Access\\Core\\Filter\\AJXP_Permission", "AJXP_Permission", true);
class_alias("Pydio\\Access\\Core\\Filter\\AJXP_PermissionMask", "AJXP_PermissionMask", true);
class_alias("Pydio\\Access\\Core\\AJXP_Node", "AJXP_Node", true);
class_alias("Pydio\\Conf\\Core\\AJXP_Role", "AJXP_Role", true);
class_alias("Pydio\\Access\\Core\\Repository", "Repository", true);
class_alias("Pydio\\Access\\Core\\ContentFilter", "ContentFilter", true);